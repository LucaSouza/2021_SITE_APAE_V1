@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
  <div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Centro de Assistência Social</h1>
    </div>
    <p class="texto-geral mt-5 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 text-justify">A <strong>Assistência Social </strong>consiste em acolhida, escuta, informação, comunicação e defesa de 
            direitos, articulação com serviço de políticas públicas setoriais, articulação da rede de serviço sócios 
            assistenciais, atividades de convívio e de organização da vida cotidiana, orientação e encaminhamentos para a 
            rede de serviços locais, referência e contra referência, construção do plano individual de atendimento, orientação sócio familiar,
            estudo social, diagnóstico socioeconômico, cuidados pessoais, desenvolvimento do convívio familiar e social, acesso a documentação pessoal,
            apoio a família na sua função protetiva, mobilização de família extensa ou ampliada, mobilização e fortalecimento do convívio e de redes sociais de apoio, 
            mobilização para o exercício da cidadania, elaboração de ficha evolutiva e relatórios.</br></br>
            
            <b>Grupos Psicossocial Amor e Cuidado:</b></br>Contribui para que não ocorra o rompimento dos vínculos afetivos, possibilitando a apropriação de recursos e saberes para o enfrentamento da situação vivenciada e promover qualidade de vida.  
            </br></br>
            <b>Grupo psicossocial fortalecimento de vínculos:</b></br>Desenvolve junto as famílias em situação de risco e vulnerabilidade social, o resgate da autoestima e a apropriação de recursos e saberes para o enfrentamento de suas dificuldades, prevenir ruptura de vínculos e romper os padrões violadores de direitos, contribuindo na melhoria da qualidade de vida. 
            </br></br>
            <b>Inserção no mercado de trabalho:</b></br>Articula com a rede de comercio local e familiares de integrantes da Educação Especial para o trabalho na busca da inclusão e inserção laboral da pessoa com deficiência intelectual e múltipla e transtorno global do desenvolvimento.  
          </p>
</div>



  <div class="container-projetos row justify-content-center">
    <!-- Additional required wrapper -->
    <div class="owl-container-projetos-corpo owl-theme owl-carousel col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9">
        <!-- Slides -->
        @foreach ($social as $projeto)
        <div class="contraste-base-projeto item">
          <a href="/noticia/{{$projeto->link}}">
            <div class="etiqueta-post">
              <span>Assistência Social</span>
            </div>
            
            <div class="wrapper-mini rounded-3">
            <picture>
                <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/360px/capa/{{$projeto['capa']}}" media="(max-width:360px)">
                <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/580px/capa/{{$projeto['capa']}}" media="(max-width:580px)">
                <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/768px/capa/{{$projeto['capa']}}" media="(max-width:768px)">
                <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/1200px/capa/{{$projeto['capa']}}" media="(max-width:1200px)">
                <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/1500px/capa/{{$projeto['capa']}}" media="(max-width:1500px)">
                <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/1900px/capa/{{$projeto['capa']}}" media="(max-width:1920px)">
                <img src="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/360px/capa/{{$projeto['capa']}}" alt="banner-{{$projeto['pasta']}}" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto mt-20">
              <h1 class="titulo-texto">{!! nl2br($projeto->titulo) !!}</h1>
              <p class="texto-segundario">{!! nl2br($projeto->descricao) !!}</p>
            </div>
          </a>
      </div>
        @endforeach
    </div>
       <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pagination-projetos-inicio paginacao-scroll"></div>
  </div>
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop