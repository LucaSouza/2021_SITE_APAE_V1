@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12 col-sm-11 col-md-11 col-lg-8 col-xl-8 col-xxl-7">
      <h1 class="titulo-section-inicio">Atendimento à Pessoa com Deficiência Intelectual e Múltipla</h1>
    </div>
    
    <p class="texto-geral mt-5 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 text-justify">
      O <b>Programa de Atendimento à Pessoa Com Deficiência Intelectual e Múltipla</b>, na APAE de Nova Andradina, visa a prestação de serviços através dos Centros:  de Assistência Social, de Educação Especial, de Saúde e Equoterapia. Atendendo crianças e adolescentes, jovens, adultos e idosos, onde os mesmos recebem gratuitamente escolaridade especial, alimentação, transporte, material escolar, uniforme, informática, atendimento psicológico, fonoaudiólogo, fisioterapêutico, sociofamiliar, equoterapia atendimento médico e exames laboratoriais, através de encaminhamentos, além de práticas esportivas, culturais, lazer e socialização, adaptados a especificidades de cada usuário dos serviços.
    </p>

</div>
  
<div class="container-projetos row justify-content-center">
    <!-- Additional required wrapper -->
    <div class="owl-container-projetos-corpo owl-theme owl-carousel col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9">
        <!-- Slides -->
        @foreach ($atendimento_especial as $projeto)
        <div class="contraste-base-projeto item">
          <a href="/noticia/{{$projeto->link}}">
            <div class="etiqueta-post">
              <span>Atendimento especial</span>
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
  </div>
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop