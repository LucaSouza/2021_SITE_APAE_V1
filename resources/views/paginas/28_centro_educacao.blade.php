@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')s
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Centro de Educação Especial</h1>
    </div>
    
    <p class="texto-geral mt-5 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 text-justify">
      O <b>Centro de Educação Especial da APAE de Nova Andradina – MS</b>, desenvolve suas ações através de metodologia diversificada de acordo com as fases de desenvolvimento do educando, respeitando o seu ritmo e suas possibilidades, com ação mediadora e questionadora do professor, valorizando as histórias de vida, experiência adquirida, conversa informal, leitura e construção de texto, pois o ponto de partida é a criança como centro do processo educativo.
    </p>

    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-5 text-left">
      <h3 class="font-weight-bold"><strong>Escola de Educação Especial “Raio de Sol”</strong></h3>
    </div>

    <p class="texto-geral col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-2 text-justify" >
    <b>Educação Precoce:</b></br>Potencializar e desenvolver, estímulos específicos para o desenvolvimento nos primeiros anos de vida, que são determinantes para a aquisição de capacidades nas áreas motora, sensorial, perceptiva, proprioceptiva, linguística, cognitiva, emocional e social. 
    </p>

    <p class="texto-geral col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-2 text-justify" >
    <b>Pré:</b></br>Desenvolver e aprender nos âmbitos afetivos, social e cognitivo integralmente estabelecidas pelos cinco Campos de Experiência para a Educação Infantil, que indicam quais são as experiências fundamentais que buscam garantir os direitos de aprendizagem do educando.   
    </p>

    <p class="texto-geral col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-2 text-justify" >
    <b>Ensino Fundamental - 1º ano, 2º ano e 3º ano:</b></br>Desenvolver sua capacidade de aprender, de compreender o ambiente natural e cultural no qual está inserido e de, a partir dessa compreensão, desenvolver seu sistema de valores, adotando uma postura de acolhimento, respeito e aceitação dos outros. 
    </p>

    <p class="texto-geral col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-2 text-justify" >
    <b>Educação de Jovens e Adultos – EJA:</b></br>Oportunizar aos jovens, adultos e idosos com deficiência Intelectual e/ou Múltipla e transtorno global do desenvolvimento, a escolarização no âmbito da educação básica, na modalidade de Educação de Jovens e Adultos, nos anos iniciais do ensino fundamental, para sua autorrealização a capacidade de produzir e o direito ao exercício da cidadania.  
    </p>

    <p class="texto-geral col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-2 text-justify" >
    <b>Educação Profissional:</b></br>Oportunizar e promover a formação profissional básica a pessoa com deficiência Intelectual e ou Múltipla e Transtorno Global do Desenvolvimento para inserção no Mercado de trabalho e consequentemente na sociedade. 
    </p>

    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-5 text-left">
      <h3 class="font-weight-bold"><strong>Centro de Atendimento Educacional Especializado Laurecy Correa Tomazinho</strong></h3>
    </div>

    <p class="texto-geral col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 mt-2 text-justify" >
    <b>CAEE:</b></br>Complementar a formação do Educando com Deficiência Intelectual e ou múltipla e transtorno global do desenvolvimento, por meio da disponibilização de serviços, recursos de acessibilidades e estratégias que eliminem as barreiras para sua plena participação e desenvolvimento de suas habilidades. 
    </p>
</div>

<div class="container-projetos row justify-content-center">
    <!-- Additional required wrapper -->
    <div class="owl-container-projetos-corpo owl-theme owl-carousel col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9">
        <!-- Slides -->
        @foreach ($educacao as $projeto)
        <div class="contraste-base-projeto item">
          <a href="/noticia/{{$projeto->link}}">
            <div class="etiqueta-post">
              <span>Centro de Educação</span>
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