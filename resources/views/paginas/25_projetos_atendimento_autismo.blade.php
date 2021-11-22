@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Projetos e Ações</h1>
      <h4 class="sub-titulo-section">Programa de Atendimento ao Autista</h4>
    </div>
    <p class="texto-geral mt-5 col-12 col-sm-12 col-md-8 col-lg-7 col-xl-9 col-xxl-7 text-justify">O <b>Programa de Atendimento ao Autista</b>, oferece serviço de avaliação diagnostica, plano de atendimento individualizado, atendimento multiprofissional especializado e direitos garantidos pelo artigo 3º da Lei Federal Nº 12,764 de 27 de dezembro de 2012 e legislações vigentes, promovendo a habilitação do autista, quanto a interação social, convivência familiar e desenvolvimento acadêmico desenvolvendo atividades de vida diária e pratica. </p>
</div>
  <div class="selecao-projeto-noticia">
    <div class="row">
      @foreach ($atendimento_autista as $projeto)
      <div class="contraste-base container-titulo-section container-noticia col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-3 ml-2">
          <a href="/noticia/{{$projeto->id}}">
            <div class="wrapper col-12 col-md-6 col-lg-6 col-xl-12">
              <picture>
                <source srcset="{{asset('img/capa')}}/{{$projeto->img}}" media="(max-width:360px)">
                <source srcset="{{asset('img/capa')}}/{{$projeto->img}}" media="(max-width:580px)">
                <source srcset="{{asset('img/capa')}}/{{$projeto->img}}" media="(max-width:768px)">
                <source srcset="{{asset('img/capa')}}/{{$projeto->img}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/capa')}}/{{$projeto->img}}" media="(max-width:1920px)">
                <img src="{{asset('img/capa')}}/{{$projeto->img}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto col-12 col-md-6 col-lg-6 col-xl-12">
              <h1 class="titulo-texto">{!! nl2br($projeto->titulo) !!}</h1>
              <p class="texto-segundario">{!! nl2br($projeto->descricao) !!}</p>
            </div>
            </a>
        </div> 
        @endforeach
    </div>
  </div>
  <div class="nav-paginas">
        {!!$atendimento_autista->links()!!}
  </div>
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop