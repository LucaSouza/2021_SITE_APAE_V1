@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
    @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12 col-sm-12 col-md-11 col-lg-10 col-xl-8 col-xxl-7">
      <h1 class="titulo-section-nossa-historia">{{$projeto->titulo}}</h1>
      <!--<h4 class="sub-titulo-section">{{$projeto->descricao}}</h4>-->
    </div>
</div>
<div class="row justify-content-center">
  <p class="texto-geral col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 text-justify">{!! nl2br($projeto->texto) !!}</p>
</div>

<div class="container-imagens-post justify-content-center row" >
  <div class="imagens-projetos owl-theme owl-carousel col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9">
    @foreach ($midias as $midia)
      <a href="{{asset('img/capa')}}/{{$midia->nome_aquivo}}" class="fresco" data-fresco-group="shared_options" data-fresco-group-options="ui: 'inside'"><img src="{{asset('img/capa')}}/{{$midia->nome_aquivo}}" alt=0000""></a>
    @endforeach
  </div>
</div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop


<!-- Slides -->
