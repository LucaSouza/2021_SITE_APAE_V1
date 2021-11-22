@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
    @include('menus.01_menu')
@stop

@section('conteudo')
<div class="row container-sem-slide">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Vídeos</h1>
    </div>
</div>
<div class="container-container-01">
  <div class="container-projetos">
      <!-- Additional required wrapper -->
      <div class="row justify-content-center">
        @foreach ($videos as $video) 
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 item-videos item-videos-videos">
              <div class="videos-mobile">
                <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video img-video-videos" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
                  <picture>
                      <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
                      <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
                      <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
                      <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
                      <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
                      <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
                  </picture>  
                    <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video play-video-videos">
                </a>
                <a href="noticia/{{$video['pasta']}}">
                  <div class="container-texto-projeto container-texto-projeto-video">
                    <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
                    <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
                  </div>
                </a>    
              </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 item-videos item-videos-videos">
            <div class="videos-mobile">
              <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video img-video-videos" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
                <picture>
                    <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
                    <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
                    <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
                    <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
                    <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
                    <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
                </picture>  
                  <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video play-video-videos">
              </a>
              <a href="noticia/{{$video['pasta']}}">
                <div class="container-texto-projeto container-texto-projeto-video">
                  <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
                  <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
                </div>
              </a>    
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 item-videos item-videos-videos">
          <div class="videos-mobile">
            <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video img-video-videos" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
              <picture>
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
              </picture>  
                <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video play-video-videos">
            </a>
            <a href="noticia/{{$video['pasta']}}">
              <div class="container-texto-projeto container-texto-projeto-video">
                <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
                <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
              </div>
            </a>    
          </div>
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 item-videos item-videos-videos">
        <div class="videos-mobile">
          <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video img-video-videos" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
            <picture>
                <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
                <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
                <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
                <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
                <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
            </picture>  
              <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video play-video-videos">
          </a>
          <a href="noticia/{{$video['pasta']}}">
            <div class="container-texto-projeto container-texto-projeto-video">
              <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
              <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
            </div>
          </a>    
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 item-videos item-videos-videos">
      <div class="videos-mobile">
        <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video img-video-videos" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
          <picture>
              <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
              <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
              <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
              <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
              <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
              <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
          </picture>  
            <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video play-video-videos">
        </a>
        <a href="noticia/{{$video['pasta']}}">
          <div class="container-texto-projeto container-texto-projeto-video">
            <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
            <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
          </div>
        </a>    
      </div>
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 item-videos item-videos-videos">
    <div class="videos-mobile">
      <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video img-video-videos" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
        <picture>
            <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
            <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
            <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
            <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
            <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
            <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
        </picture>  
          <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video play-video-videos">
      </a>
      <a href="noticia/{{$video['pasta']}}">
        <div class="container-texto-projeto container-texto-projeto-video">
          <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
          <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
        </div>
      </a>    
    </div>
</div>

<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 item-videos item-videos-videos">
  <div class="videos-mobile">
    <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video img-video-videos" src="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
      <picture>
          <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/360px/video/{{$video['capa']}}" media="(max-width:360px)">
          <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/580px/video/{{$video['capa']}}" media="(max-width:580px)">
          <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" media="(max-width:768px)">
          <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1200px/video/{{$video['capa']}}" media="(max-width:1200px)">
          <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1500px/video/{{$video['capa']}}" media="(max-width:1500px)">
          <source srcset="{{asset('img/fotos')}}/{{$video['pasta']}}/1900px/video/{{$video['capa']}}" media="(max-width:1920px)">
      </picture>  
        <img src="{{asset('img/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video play-video-videos">
    </a>
    <a href="noticia/{{$video['pasta']}}">
      <div class="container-texto-projeto container-texto-projeto-video">
        <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
        <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
      </div>
    </a>    
  </div>
</div>
        @endforeach
      </div>
  </div>
</div>
  <div class="nav-paginas">{!!$videos->links()!!}</div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop

