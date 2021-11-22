<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Video;
use App\Models\Evento;
use App\Models\Banner;
use App\Models\Gestao;
use App\Models\Tag;
use App\Models\Banner_secundario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DateTime;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /*Filtros para página inicial*/


        $post_projetos = Post::where([['tipo_post', '=', '1'],['sub_tipo', '=', '1']])->orderByDesc('data_post')->take(7)->get();
        $post_noticias = Post::where('tipo_post', 2)->orderByDesc('data_post')->take(7)->get();
        //$post_depoimentos = Post::where('tipo_post', 3)->orderByDesc('data_post')->take(7)->get();
        $post_videos = Video::where([['status', 1],['destaque', '=', '1']])->orderByDesc('data_post')->get();
        $post_servicos = Post::where('tipo_post', 5)->orderByDesc('data_post')->take(7)->get();
        $post_eventos = Evento::where('ativo',1)->orderBy('data', 'asc')->take(10)->get();
        $post_banner_secundario = Banner_secundario::where('ativo',1)->orderBy('data_post', 'asc')->get();

        /*Fim Filtros para página inicial*/   
        
        /*Destaque Banner Inicio*/
        $Controller = new SiteController;

        $post_banners = Banner::where('ativo',1)->get();
        $post_banners_inicio = $Controller->buscar_arquivo_capa($post_banners);
        
        $post_principal = Post::where('destaque', 1)->orderByDesc('data_post')->take(7)->get();
        $post_principal_inicio = $Controller->buscar_arquivo_capa($post_principal);

        
        $array_banners = array_merge($post_banners_inicio->toArray(), $post_principal_inicio->toArray());
        
        /*Fim Destaque Banner Inicio*/

        /*Projetos Inicio*/

        $post_projetos = $Controller->buscar_arquivo_capa($post_projetos);
        

        /*Fim Projetos Inicio*/

        $post_banner_secundario = $Controller->buscar_arquivo_capa($post_banner_secundario);
        
        if(empty($post_eventos)){
            $post_eventos = $Controller->buscar_arquivo_capa($post_eventos);
            $post_eventos[0]->data = $Controller->calcular_tempo($post_eventos[0]->data);
        }

        
        /*Buscando tags de noticias*/
        
        $tags[] = 0;
        foreach ($post_noticias as $noticia){
            $noticia['tags'] = $noticia->buscar_tags->toArray();
        }

        $post_noticias_imagem = $Controller->buscar_arquivo_capa($post_noticias);
        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('APAE | APAE DE NOVA ANDRADINA', 'Apae de Nova Andradina serviços prestados com excelência.');    
       

        return view('paginas.01_bem_vindo') ->with('post_noticias',$post_noticias_imagem)
                                            ->with('post_projetos',$post_projetos)
                                            ->with('post_videos',$post_videos)
                                            ->with('post_servicos',$post_servicos)
                                            ->with('array_banners',$array_banners)
                                            ->with('compartilhamento',$dados_compartilhamento)
                                            ->with('post_eventos',$post_eventos)
                                            ->with('post_banner_secundario',$post_banner_secundario);
                                            
                                            
    }

    public function buscar_arquivo_capa($posts)
    {
        
        foreach ($posts as $post){
            $files = Storage::files('fotos/'.$post->pasta.'/360px/capa/');
                foreach ($files as $file) {
                    $post['capa'] = basename($file);
                }   
        }
        return $posts;
    } 

    public function buscar_arquivo_post($pasta)
    {   
        return Storage::files('fotos/'.$pasta.'/360px/imagens/');
    } 

    public function compartilhamento_pagina($titulo, $descricao, $pasta, $imagem){
        $compartilhamento['titulo'] = $titulo;
        $compartilhamento['descricao'] = $descricao;
        $compartilhamento['imagem'] = $imagem;
        $compartilhamento['pasta'] = 'fotos/'.$pasta.'/compartilhamento';

        $dados_compartilhamento = (object)$compartilhamento;

        return $dados_compartilhamento;
    }

    public function compartilhamento_geral($titulo, $descricao){
        $compartilhamento['titulo'] = $titulo;
        $compartilhamento['descricao'] = $descricao;
        $compartilhamento['imagem'] = 'logo-apaena.jpg';
        $compartilhamento['pasta'] = 'fotos';

        $dados_compartilhamento = (object)$compartilhamento;

        return $dados_compartilhamento;
    }

    public function noticias()
    {
        $noticias = Post::where([
            ['tipo_post', '=', '2'],
            ['sub_tipo', '=', '0'],
        ])->orderByDesc('data_post')->paginate(10);
        
        $Controller = new SiteController;
        $tags[] = 0;
        $noticias = $Controller->buscar_arquivo_capa($noticias);
        foreach ($noticias as $noticia){
            $tags[$noticia->id] = $noticia->buscar_tags;
        }

   

        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('APAE | APAE DE NOVA ANDRADINA', 'Apae de Nova Andradina serviços prestados com excelência.');    
        
        return view('paginas.12_noticias')->with('noticias',$noticias)
                                            ->with(compact('tags'))
                                            ->with('compartilhamento',$dados_compartilhamento);                                                                         
    }   

    public function garantia_de_direito()
    {
        $Controller = new SiteController;       
        
        $garantia_de_direito = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '1'],
        ])->paginate(10);

        $garantia_de_direito = $Controller->buscar_arquivo_capa($garantia_de_direito);
        
        
        $dados_compartilhamento =  $Controller->compartilhamento_geral('Garantia de Direito | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');    

        return view('paginas.21_garantia_de_direito')->with('garantia_de_direito',$garantia_de_direito)
                                                     ->with('compartilhamento',$dados_compartilhamento); 
                                            
    }


    public function buscarNoticiaPorTag($id){
        $tag = Tag::find($id);
        $posts = $tag->buscar_posts;
        return $posts;
    }
   

    public function social()
    {
        
        $social = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '2'],
        ])->paginate(10);
        
        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(2);
        $posts = $Controller->buscar_arquivo_capa($posts);

        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Assitência Social | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.27_assistencia_social')->with('social',$posts)
                                                    ->with('compartilhamento',$dados_compartilhamento);                                                                      
    }

    
    public function noticia($link){   
        
        $Controller = new SiteController;
        $post = Post::where('link',$link)->get();
        $post = $Controller->buscar_arquivo_capa($post);
        $post_arquivos_midias = $Controller->buscar_arquivo_post($post[0]->pasta);
        
        $tags = $post[0]->buscar_tags;
        //$midias = $id->buscar_midias;
        $post_videos = Video::where([['status', '=', '1'],['id_post', '=', $post[0]->id]])->get();
       
        
        $i = 0;
        $j = 0;
        $mais_noticias = array();
        $serialized = array();
        
        foreach($tags as $tag){
            $collecion = $tag->buscar_posts;
            foreach($collecion as $post_post){
                $teste = in_array($post_post->id,$serialized);
                if($teste==false && $post_post->id != $post[0]->id){
                    $serialized[] = $post_post->id;
                    $mais_noticias[$i] = $post_post;
                    $i++;
                }
                if($i == 25){
                    break;
                }
                $j++;
            }
        }

        $mais_noticias = $Controller->buscar_arquivo_capa($mais_noticias);
        $post[0]->data_post = $Controller->calcular_tempo($post[0]->data_post);
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_pagina('Notícias | '.$post[0]->titulo, $post[0]->descricao,$post[0]->pasta,$post[0]->capa);    
        return view('paginas.14_noticia')->with('noticia',$post[0]) 
                                         ->with('tags',$tags)
                                         ->with('mais_noticias',$mais_noticias)
                                         ->with('compartilhamento',$dados_compartilhamento)
                                         ->with('midias',$post_arquivos_midias)
                                         ->with('videos', $post_videos);                                                               
    }

    public function evento($link){
        
        $Controller = new SiteController;
        $evento = Evento::where('link',$link)->get();
        $videos = Video::where('id_evento',$evento[0]->id)->get();

        $evento = $Controller->buscar_arquivo_capa($evento);
        //$post_arquivos_midias = $Controller->buscar_arquivo_post($post[0]->pasta); 
        
        //$tags = $post[0]->buscar_tags;
        //$midias = $id->buscar_midias;
        
        $evento[0]->data = $Controller->calcular_tempo($evento[0]->data);
        $dados_compartilhamento = $Controller->compartilhamento_pagina('Evento | '.$evento[0]->titulo, $evento[0]->descricao,$evento[0]->pasta,$evento[0]->capa);  
        
        return view('paginas.41_evento')->with('evento',$evento[0])
                                        ->with('videos',$videos) 
                                        ->with('compartilhamento',$dados_compartilhamento);
                                                                                                      
    }

    public function buscar_arquivo_capa_evento($posts)
    {
        foreach ($posts as $post){
            $files = File::glob(public_path('img/eventos/'.$post->pasta.'/compartilhamento/*.*'));
                foreach ($files as $file) {
                    $post['capa'] = basename($file);
                }   
        }
        return $posts;
    } 


    public function calcular_tempo($data_final)
    {
        $data_inicio = new DateTime($data_final);
        return $data_inicio->format('d/m/Y');                                                                        
    }


    public function educacao()
    {
        
        $educacao = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '3'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(1);
        $posts = $Controller->buscar_arquivo_capa($posts);

        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Educação Especial | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.28_centro_educacao')->with('educacao',$posts)                                                                       
                                                 ->with('compartilhamento',$dados_compartilhamento);
    }       

    public function saude()
    {
        
        $saude = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '4'],
        ])->paginate(10);
        
        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(3);
        $posts = $Controller->buscar_arquivo_capa($posts);

        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Centro de Saúde | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.29_centro_saude')->with('saude',$posts)                                                                 
                                              ->with('compartilhamento',$dados_compartilhamento);                                                                        
    }

    public function equoterapia()
    {
        
        $equoterapia = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '5'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(4);
        $posts = $Controller->buscar_arquivo_capa($posts);

            
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Centro de Equoterapia | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.30_centro_equoterapia')->with('equoterapia',$posts)                                                                       
                                                    ->with('compartilhamento',$dados_compartilhamento);
    }

    public function sustentabilidade(){
        
        $sustentabilidade = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '6'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(6);
        $posts = $Controller->buscar_arquivo_capa($posts);


        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Sustentabilidade | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.33_sustentabilidade')->with('sustentabilidade',$posts)                                                                    
                                                    ->with('compartilhamento',$dados_compartilhamento);
    }

    
    public function arte_cultura()
    {
        
        $arte_cultura = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '7'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(7);
        $posts = $Controller->buscar_arquivo_capa($posts);

        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Arte e Cultura | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.22_projetos_arte_cultura')->with('arte_cultura',$posts)                                                                    
                                                       ->with('compartilhamento',$dados_compartilhamento);
                                            
    }

    public function esporte_lazer()
    {
        
        $esporte_lazer = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '8'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(8);
        $posts = $Controller->buscar_arquivo_capa($posts);

        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Esporte e lazer | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.23_projetos_esporte_lazer')->with('esporte_lazer',$posts)                                                                   
                                                        ->with('compartilhamento',$dados_compartilhamento);
                                            
    }

    public function tecnologia()
    {
        
        $tecnologia = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '9'],
        ])->paginate(10);
        
        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(9);
        $posts = $Controller->buscar_arquivo_capa($posts);

        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Tecnologia | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.36_tecnologia')->with('tecnologia',$posts)                                                                   
                                            ->with('compartilhamento',$dados_compartilhamento);
    }

    public function adm()
    {
        
        $adm = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '10'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(5);
        $posts = $Controller->buscar_arquivo_capa($posts);
        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Gestão Administrativa e Financeira | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.31_gestao_administrativa')->with('adm',$posts)                                                                   
                                                       ->with('compartilhamento',$dados_compartilhamento);
    }
    

    public function quemsomos(){
        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Conheça um pouco mais sobre nossa instituição', 'Apae de Nova Andradina serviços prestados com excelência.');    

        return view('paginas.26_quem_somos')->with('compartilhamento',$dados_compartilhamento); 
    }

    public function transparencia(){
        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Transparência | Aqui você visualiza todas nossas documentações', 'Apae de Nova Andradina serviços prestados com excelência.');    

        return view('paginas.03_transparencia')->with('compartilhamento',$dados_compartilhamento); 
    }
    


    public function infraestrutura(){
        
        $adequacao = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '11'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(10);
        $posts = $Controller->buscar_arquivo_capa($posts);


        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Infraestrutura | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.34_adequacao')->with('infraestrutura',$posts)                                                                
                                           ->with('compartilhamento',$dados_compartilhamento);
    }

    public function mobilidade(){
        
        $mobilidade = Post::where([
            ['tipo_post', '=', '1'],
            ['sub_tipo', '=', '12'],
        ])->paginate(10);

        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(11);
        $posts = $Controller->buscar_arquivo_capa($posts);

        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Mobilidade | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.35_mobilidade')->with('mobilidade',$posts)                                                                
                                            ->with('compartilhamento',$dados_compartilhamento);
    }

    public function gestao()
    {
        $gestoes = Gestao::select("*")->orderByDesc('ano_inicio')->get();

        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Gestão | Conheça nossos Presidentes', 'Apae de Nova Andradina serviços prestados com excelência.');    

        return view('paginas.32_gestao')->with('gestoes',$gestoes)
                                        ->with('compartilhamento',$dados_compartilhamento);                                                                          
    }

    
    public function programas_servicos()
    {
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Programas e Serviços | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');    

        return view('paginas.20_programas')->with('compartilhamento',$dados_compartilhamento);                                                                         
    }
    

    

    public function atendimento_especial()
    {
        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(12);
        $posts = $Controller->buscar_arquivo_capa($posts);

        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Educação Especial | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.37_atendimento_especial')->with('atendimento_especial',$posts)                                                                       
                                                        ->with('compartilhamento',$dados_compartilhamento);
    }


    public function autodefensor()
    {
        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(13);
        $posts = $Controller->buscar_arquivo_capa($posts); 
        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Autodefensores | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.38_autodefensor')->with('autodefensor',$posts)                                                                       
                                              ->with('compartilhamento',$dados_compartilhamento);
    }

    public function atendimento_autista()
    {
        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(14);
        $posts = $Controller->buscar_arquivo_capa($posts);

        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Atendimento ao Autista | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.39_atendimento_autista')->with('atendimento_autista',$posts)                                                                       
                                                    ->with('compartilhamento',$dados_compartilhamento);
    }


    public function cidadania_mais_amor()
    {
        $Controller = new SiteController;
        $posts = $Controller->buscarNoticiaPorTag(15);
        $posts = $Controller->buscar_arquivo_capa($posts);

        $dados_compartilhamento = $Controller->compartilhamento_geral('Cidadania mais Amor | Conheça nossos programas e serviços prestados', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.40_cidadania_mais_amor')->with('cidadania_mais_amor',$posts)                                                                       
                                                    ->with('compartilhamento',$dados_compartilhamento);
    }

   

    public function fale_conosco()
    {
            
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Contato | conheça nossa instituição', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.13_fale_conosco')->with('compartilhamento',$dados_compartilhamento);
    }

    public function doacao()
    {        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Doação | Contribua com Apae de Nova Andradina', 'Apae de Nova Andradina serviços prestados com excelência.');

        return view('paginas.16_doacao')->with('compartilhamento',$dados_compartilhamento);
    }
























    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
