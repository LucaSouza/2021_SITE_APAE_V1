@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Garantia de Direito</h1>
    </div>
    <p class="texto-geral mt-2 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 text-justify">Os serviços ofertados são garantidos pela Lei Federal nº 13.146/2015, que institui o Estatuto da Pessoa com Deficiência, destinada a assegurar e a promover, em condições de igualdade, o exercício dos direitos e das liberdades fundamentais por pessoa com deficiência, visando à sua inclusão social e cidadania </p>
</div>
<div class="container-container-01">
  <div class="selecao-projeto-noticia">
    <div class="row justify-content-center">
    @foreach($garantia_de_direito as $direito)
      <div class="item contraste-base-projeto container-titulo-section col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-3 me-3">
          <a href="{{$direito->link}}">
            <div class="wrapper-mini rounded-3">
              <picture>
                  <source srcset="{{asset('storage/fotos')}}/{{$direito['pasta']}}/360px/capa/{{$direito['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$direito['pasta']}}/580px/capa/{{$direito['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$direito['pasta']}}/768px/capa/{{$direito['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$direito['pasta']}}/1200px/capa/{{$direito['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$direito['pasta']}}/1500px/capa/{{$direito['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$direito['pasta']}}/1900px/capa/{{$direito['capa']}}" media="(max-width:1920px)">
                  <img src="{{asset('storage/fotos')}}/{$direito['pasta']}}/360px/capa/{{$direito['capa']}}" alt="banner-{{$direito['pasta']}}" class="img-slide-secundario">
                </picture>
              </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">{{$direito->titulo}}</h1>
              <p class="texto-segundario">{{$direito->descricao}}</p>
            </div>
            </a>
        </div> 
      @endforeach
      </div> 
      </div>
      </div>
    </div>
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop