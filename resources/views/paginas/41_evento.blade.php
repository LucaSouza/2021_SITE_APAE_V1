@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
    @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="container-container-01">
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 col-xxl-7">
      <h1 class="titulo-texto-noticia-corpo">{{$evento->titulo}}</h1>
    </div>
</div>

  <div class="row" id="container-data-publicacao-social">
      <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
        <p class="col float-center text-danger" id="data-publicacao">Data: {{$evento->data}}</br>Hora: {{$evento->hora}}  @if($evento->inscricao==1)
          <button type="button" name="button" class="btn btn-primary">Inscrição aqui</button>
        @endif</p>
      </div>


      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-7 icon-social-container d-flex justify-content-end">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" class="col-2 link-social"><i class="fab fa-facebook icon-social" target="_blank"></i></a>
        <a href="http://www.instagram.com/apaedenovaandradina" class="col-2 link-social" target="_blank"><img src="{{asset('img/fotos/icon-img/instagram-logo.png')}}" class="icon-social-img icon-social" alt="" ></a>
        <a href="https://api.whatsapp.com/send?text={{url()->current()}}" class="col-2 link-social" target="_blank"><i class="fab fa-whatsapp icon-social"></i></a>
        <!--<a href="/4" class="col-2 link-social"><i class="fab fa-twitter icon-social"></i></a>-->
    </div>
  </div>
  

  <hr class="dividir">
  @if(count($videos)!=0)
      <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-6 pl-4">
          <h3 class="text-left font-weight-bold mt-5 pt-5" id="noticias-relacionadas"></h3>
        </div>
      </div>
    <div class="container-imagens-post justify-content-center row" >
      <div class="videos-noticia owl-theme owl-carousel col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-6">
        @foreach($videos as $video)
          <div class="videos-mobile">
            <a href="{{$video->link}}" class="fresco" autoplay><img class="" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
                <picture>
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
                
                </picture>
                <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" class="play-video play-noticia">
            </a>
          </div>
        @endforeach
      </div>
    </div>
  
    @else
      <div class="row justify-content-center">
        <div class="container-img-corpo-noticia col-12 col-sm-12 col-md-10 col-lg-10 col-xl-8 col-xxl-6 overflow-hidden">
          <picture>
                <source srcset="{{asset('img/fotos')}}/{{$evento['pasta']}}/360px/capa/{{$evento->capa}}" media="(max-width:360px)">
                <source srcset="{{asset('img/fotos')}}/{{$evento['pasta']}}/580px/capa/{{$evento->capa}}" media="(max-width:580px)">
                <source srcset="{{asset('img/fotos')}}/{{$evento['pasta']}}/768px/capa/{{$evento->capa}}" media="(max-width:768px)">
                <source srcset="{{asset('img/fotos')}}/{{$evento['pasta']}}/1200px/capa/{{$evento->capa}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/fotos')}}/{{$evento['pasta']}}/1500px/capa/{{$evento->capa}}" media="(max-width:1500px)">
                <source srcset="{{asset('img/fotos')}}/{{$evento['pasta']}}/1900px/capa/{{$evento->capa}}" media="(max-width:1900px)">
                <img src="{{asset('img/fotos')}}/{{$evento['pasta']}}/1200px/capa/{{$evento->capa}}" alt="img-slide-noticia-{{$evento->capa}}" class="img-corpo-noticia">
                
            </picture>
          </div>
      </div>
  @endif

  <div class="row justify-content-center">
    <p class="texto-geral col-12 col-sm-12 col-md-10 col-lg-10 col-xl-9 col-xxl-6 text-justify">{!! nl2br($evento->texto) !!}</p>
  </div>

</div>
<div class="sharethis-inline-share-buttons"></div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop