@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
    @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="container-container-01">
  <div class="row container-titulo-section container-sem-slide justify-content-center">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 col-xxl-7">
        <h1 class="titulo-texto-noticia-corpo">{{$noticia->titulo}}</h1>
      </div>
  </div>
<div class="row" id="container-data-publicacao-social">
  <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-6 col-xxl-5">
    <p class="col float-center" id="data-publicacao">Publicado em {{$noticia->data_post}}</p>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-7 icon-social-container d-flex justify-content-end">
      <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" class="col-2 link-social"><i class="fab fa-facebook icon-social" target="_blank"></i></a>
      <a href="http://www.instagram.com/apaedenovaandradina" class="col-2 link-social" target="_blank"><img src="{{asset('storage/fotos/icon-img/instagram-logo.png')}}" class="icon-social-img icon-social" alt="" ></a>
      <a href="https://api.whatsapp.com/send?text={{url()->current()}}" class="col-2 link-social" target="_blank"><i class="fab fa-whatsapp icon-social"></i></a>
      <!--<a href="/4" class="col-2 link-social"><i class="fab fa-twitter icon-social"></i></a>-->
  </div>
</div>

  <hr class="dividir">

  <div class="row justify-content-center">
    <div class="container-img-corpo-noticia col-12 col-sm-12 col-md-10 col-lg-10 col-xl-8 col-xxl-6 overflow-hidden">
      <picture>
            <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/360px/capa/{{$noticia->capa}}" media="(max-width:360px)">
            <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/580px/capa/{{$noticia->capa}}" media="(max-width:580px)">
            <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/768px/capa/{{$noticia->capa}}" media="(max-width:768px)">
            <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1200px/capa/{{$noticia->capa}}" media="(max-width:1200px)">
            <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1500px/capa/{{$noticia->capa}}" media="(max-width:1500px)">
            <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1900px/capa/{{$noticia->capa}}" media="(max-width:1900px)">
            <img src="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1200px/capa/{{$noticia->capa}}" alt="img-slide-noticia-{{$noticia->capa}}" class="img-corpo-noticia">
            
        </picture>
      </div>
      <div class="row imagem-descricao-corpo-noticia justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-8 col-xxl-6">
          
        </div>
      </div>
      
      <p class="texto-geral col-12 col-sm-12 col-md-10 col-lg-10 col-xl-8 col-xxl-6 text-justify">{!! nl2br($noticia->texto) !!}</p>
  </div>
  @if(count($videos)!=0)
      <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-6 pl-4">
          <h3 class="text-left font-weight-bold mt-5 pt-5" id="noticias-relacionadas">Vídeos</h3>
        </div>
      </div>
    <div class="container-imagens-post justify-content-center row" >
      <div class="videos-noticia owl-theme owl-carousel col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-6">
        @foreach($videos as $video)
          <div class="videos-mobile">
            <a href="{{$video->link}}" class="fresco" autoplay><img class="" src="{{asset('storage/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
            <picture>
                  <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
                
                </picture>
                <img src="{{asset('storage/fotos/icon-img/play.png')}}" alt="play" class="play-video play-noticia">
            </a>
          </div>
        @endforeach
      </div>
    </div>
  @endif
  <div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-6 pl-4">
      <h3 class="text-left font-weight-bold mt-5 pt-5" id="noticias-relacionadas">Imagens</h3>
    </div>
  </div>
<div class="container-imagens-post justify-content-center row" >
  <div class="imagens-noticia owl-theme owl-carousel col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-6">
    @php
      $contador = 1;
    @endphp
    @foreach($midias as $midia)

      <a href="{{asset('storage/fotos')}}/{{$noticia->pasta}}/360px/imagens/{{basename($midia)}}" class="fresco" data-fresco-group="shared_options" data-fresco-group-options="ui: 'inside'">
        <picture>
          <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/360px/imagens/{{basename($midia)}}" media="(max-width:360px)">
          <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/580px/imagens/{{basename($midia)}}" media="(max-width:580px)" >
          <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/768px/imagens/{{basename($midia)}}" media="(max-width:768px)" >
          <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1200px/imagens/{{basename($midia)}}" media="(max-width:1200px)" >
          <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1500px/imagens/{{basename($midia)}}" media="(max-width:1500px)" >
          <source srcset="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1900px/imagens/{{basename($midia)}}" media="(max-width:1900px)" >
          <img src="{{asset('storage/fotos')}}/{{$noticia->pasta}}/1200px/imagens/{{basename($midia)}}" alt="img-slide-noticia-{{basename($midia)}}" class="imagem-noticia">
        </picture>
        <span class="quantidade-midias">{{$contador++}}/{{count($midias)}}</span>
      </a>
    @endforeach
  </div>
</div>
<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-7 pl-4">
      <h3 class="text-left font-weight-bold mt-5 pt-5" id="noticias-relacionadas">Notícias relacionadas</h3>
    </div>
</div>
<div class="row justify-content-center">
      @foreach ($mais_noticias as $mais)      
          <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-7"> 
            <a href="{{$mais->link}}" class="row container-noticia-relacionadas">
              
                <div class="col-12 col-sm-12 col-md-4 col-lg-5 col-xl-5 col-xxl-4 rounded-3 overflow-hidden container-img-relacionadas">
                  <picture>
                    <source srcset="{{asset('storage/fotos')}}/{{$mais->pasta}}/360px/capa/{{$mais->capa}}" media="(max-width:360px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$mais->pasta}}/580px/capa/{{$mais->capa}}" media="(max-width:580px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$mais->pasta}}/768px/capa/{{$mais->capa}}" media="(max-width:768px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$mais->pasta}}/1200px/capa/{{$mais->capa}}" media="(max-width:1200px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$mais->pasta}}/1500px/capa/{{$mais->capa}}" media="(max-width:1500px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$mais->pasta}}/1900px/capa/{{$mais->capa}}" media="(max-width:1900px)">
                    <img src="{{asset('storage/fotos')}}/{{$mais->pasta}}/1200px/capa/{{$mais->capa}}" alt="img-noticia-relacionada-{{$mais->capa}}" class="img-noticia-relacionada rounded-3">
                  </picture>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7 sem-margem-top container-texto-noticia-relacionadas">
                  <h1 class="titulo-texto-noticia">{!! nl2br($mais->titulo) !!}</h1>
                  <p class="texto-segundario-noticia texto-segundario-noticias">{!! nl2br($mais->descricao) !!}</p>
                </div>
                </a>
            </div>
      @endforeach
</div>
</div>
<div class="sharethis-inline-share-buttons"></div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop