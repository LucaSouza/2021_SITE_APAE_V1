@extends('bases.01_base_01')


<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop


<!--SECTION SLIDER PAGINA PRINCIPAL-->
@section('slide')
  @include('efeitos.01_slide_base_01')
@stop

<!--SECTION PROJETOS PAGINA PRINCIPAL-->
@section('projetos')

<div class="container-container-01">
<div class="row container-titulo-section container-sem-slide-inicio">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Programas</h1>
      <!--<h4 class="sub-titulo-section">temos muitos, temos vários</h4>-->
    </div>
</div>
<div class="row">
    <div class="col-12 text-end mb-2">
      <a href="/programas-servicos" class="ver-tudo">mais programas</a>
    </div>
</div>

<div class="container-projetos row">
    <!-- Additional required wrapper -->
    <div class="owl-container-noticias owl-theme owl-carousel">
        <!-- Slides -->
        @foreach ($post_projetos as $noticia)
          <div class="contraste-base-projeto item">
            <a href="{{$noticia->link}}">
              <div class="etiqueta-post">
                <span>Programa</span>
              </div>
              
              <div class="wrapper-mini rounded-3">
              <picture>
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/360px/capa/{{$noticia['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/580px/capa/{{$noticia['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/768px/capa/{{$noticia['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1200px/capa/{{$noticia['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1500px/capa/{{$noticia['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1900px/capa/{{$noticia['capa']}}" media="(max-width:1920px)">
                  <img src="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/360px/capa/{{$noticia['capa']}}" alt="banner-{{$noticia['pasta']}}" class="img-slide-secundario">
                </picture>
              </div>
              <div class="container-texto-projeto mt-20">
                <h1 class="titulo-texto">{!! nl2br($noticia->titulo) !!}</h1>
                <p class="texto-segundario">{!! nl2br($noticia->descricao) !!}</p>
              </div>
            </a>         
        </div>
        @endforeach
    </div>
  </div>
  </div>
@stop

<!--SECTION PROJETOS PAGINA PRINCIPAL-->
@section('noticias')

<div class="container-container-01">
<div class="row container-titulo-section container-sem-slide-inicio">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Notícias</h1>
      <!--<h4 class="sub-titulo-section">temos muitos, temos vários</h4>-->
    </div>
</div>
<div class="row">
    <div class="col-12 text-end mb-2">
      <a href="/noticias" class="ver-tudo">mais notícias</a>
    </div>
</div>

<div class="container-projetos row">
    <!-- Additional required wrapper -->
    <div class="owl-container-noticias owl-theme owl-carousel">
        <!-- Slides -->
        @foreach ($post_noticias as $noticia)
          <div class="contraste-base-projeto item">
            <a href="/noticia/{{$noticia->link}}">
              <div class="etiqueta-post">
                <span>{{$noticia->cabeca_post}}</span>
              </div>
              
              <div class="wrapper-mini rounded-3">
              <picture>
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/360px/capa/{{$noticia['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/580px/capa/{{$noticia['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/768px/capa/{{$noticia['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1200px/capa/{{$noticia['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1500px/capa/{{$noticia['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1900px/capa/{{$noticia['capa']}}" media="(max-width:1920px)">
                  <img src="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/360px/capa/{{$noticia['capa']}}" alt="banner-{{$noticia['pasta']}}" class="img-slide-secundario">
                </picture>
              </div>
              <div class="container-texto-projeto mt-20">
                <h1 class="titulo-texto">{!! nl2br($noticia->titulo) !!}</h1>
                <p class="texto-segundario">{!! nl2br($noticia->descricao) !!}</p>
              </div>
            </a>
            <div class="text-center row container-tags ms-3">
              @foreach ($noticia->tags as $tag)
                <div class="t-top t-sm bordered col-3 col-sm-3 col-md-8 col-lg-7 col-xl-6 me-2 p-1" style="font-size: 0.7rem; min-height: 5%; max-width: 15%; border-radius: 100vw; font-weight: 700; color: white; background-color:{{$tag['cor']}}; --my-color-var: {{$tag['cor']}}" data-tooltip="{{$tag['tag']}}">{{$tag['apelido']}}</div>
              @endforeach
            </div>
        </div>
        @endforeach
    </div>
  </div>
  </div>
@stop

<!--SECTION EVENTOS PAGINA PRINCIPAL-->
@section('eventos')
<div class="container-container-01">
<div class="row container-titulo-section container-sem-slide-inicio">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Eventos</h1>
    </div>
</div>
<div class="container-projetos row">
    <!-- Additional required wrapper -->
    <div class="owl-container-noticias owl-theme owl-carousel">
        <!-- Slides -->
        @foreach ($post_eventos as $evento)
        <a href="/evento/{{$evento->link}}">
        <div class="contraste-base-projeto item">
          <div class="movie">
            <div class="movie__data">
              <div class="movie__poster">
                <span class="movie__poster--fill">
                  <picture>
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/360px/capa/{{$evento['capa']}}" media="(max-width:360px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/580px/capa/{{$evento['capa']}}" media="(max-width:580px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/768px/capa/{{$evento['capa']}}" media="(max-width:768px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/1200px/capa/{{$evento['capa']}}" media="(max-width:1200px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/1500px/capa/{{$evento['capa']}}" media="(max-width:1500px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/1900px/capa/{{$evento['capa']}}" media="(max-width:1920px)">
                    <img src="{{asset('storage/fotos')}}/{{$evento['pasta']}}/360px/capa/{{$evento['capa']}}" alt="banner-{{$evento['pasta']}}" class="">
                  </picture>
                </span>
                <span class="movie__poster--featured">
                <picture>
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/360px/capa/{{$evento['capa']}}" media="(max-width:360px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/580px/capa/{{$evento['capa']}}" media="(max-width:580px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/768px/capa/{{$evento['capa']}}" media="(max-width:768px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/1200px/capa/{{$evento['capa']}}" media="(max-width:1200px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/1500px/capa/{{$evento['capa']}}" media="(max-width:1500px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$evento['pasta']}}/1900px/capa/{{$evento['capa']}}" media="(max-width:1920px)">
                    <img src="{{asset('storage/fotos')}}/{{$evento['pasta']}}/360px/capa/{{$evento['capa']}}" alt="banner-{{$evento['pasta']}}" class="">
                  </picture>
                </span>
              </div>
              <div class="movie__details">
                <h2 class="movie__title">{{$evento->titulo}}</h2>
                
                <p class="movie__plot text-danger fw-bold">{{$evento->data}} - {{$evento->hora}}</p>
                <div class="movie__credits">
                  <p><strong>Local:</strong> {{$evento->local}}</p>
                  @if($evento->inscricao==1)
                    <p><strong>Palestrante:</strong> {{$evento->palestrante}}</p>
                    <p><strong>Inscrição:</strong> Sim</p>
                    
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-eventos paginacao-scroll"></div>
</div>
</div>
@stop

<!--SECTION EVENTOS PAGINA PRINCIPAL-->
@section('slide-secundario')
<div class="container-projetos row">
    <!-- Additional required wrapper -->
    <div class="owl-container-slide-secundario owl-theme owl-carousel">
        <!-- Slides -->
        @foreach ($post_banner_secundario as $banner_secundario)
        <div class="item slide-secundario">
          @if($banner_secundario['link']=='NULL')
            <a href="/">
          @else
            <a href="/{{$banner_secundario['link']}}">
                <picture>
                  <source srcset="{{asset('storage/fotos')}}/{{$banner_secundario['pasta']}}/360px/capa/{{$banner_secundario['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner_secundario['pasta']}}/580px/capa/{{$banner_secundario['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner_secundario['pasta']}}/768px/capa/{{$banner_secundario['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner_secundario['pasta']}}/1200px/capa/{{$banner_secundario['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner_secundario['pasta']}}/1500px/capa/{{$banner_secundario['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner_secundario['pasta']}}/1900px/capa/{{$banner_secundario['capa']}}" media="(max-width:1900px)">
                  <img src="{{asset('storage/fotos')}}/{{$banner_secundario['pasta']}}/1900px/capa/{{$banner_secundario['capa']}}" alt="banner-{{$banner_secundario['pasta']}}" class="slide-secundario-img">
                </picture>
          @endif
          </a>
        </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-eventos paginacao-scroll"></div>
</div>
@stop

<!--SECTION NOTICIAS PAGINA PRINCIPAL-->
@section('videos')
<div class="container-container-01">

<div class="row container-titulo-section container-sem-slide-inicio">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Vídeos em destaque</h1>
      <!--<h4 class="sub-titulo-section">temos muitos, temos vários</h4>-->
    </div>
</div>
<!--
<div class="row">
    <div class="col-12 text-end mb-2">
      <a href="/videos" class="ver-tudo">mais vídeos</a>
    </div>
</div>
-->
<div class="container-projetos row">
    <!-- Additional required wrapper -->
    <div class="owl-container-videos owl-theme owl-carousel">
      @if(!empty($post_videos))
        @foreach ($post_videos as $video)
          
          <!-- Slides 
        <div class="item item-videos">
        <div class="etiqueta-post">
            <span>Assista</span>
          </div>-->
          
            
            <div class="videos-mobile contraste-base-projeto">
              <a href="{{$video->link}}" class="fresco" autoplay><img class="img-video" src="{{asset('storage/fotos')}}/{{$video['pasta']}}/768px/video/{{$video['capa']}}" alt="">
              <picture>
                    <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/360px/{{$video['capa']}}" media="(max-width:360px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/580px/{{$video['capa']}}" media="(max-width:580px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/768px/{{$video['capa']}}" media="(max-width:768px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/1200px/{{$video['capa']}}" media="(max-width:1200px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/1500px/{{$video['capa']}}" media="(max-width:1500px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$video['pasta']}}/1900px/{{$video['capa']}}" media="(max-width:1920px)">
                  
                  </picture>
                  <div>
                    <img src="{{asset('storage/fotos/icon-img/play.png')}}" alt="play" id="" class="play-video">
                    <p class="tempo-video">{{$video->tempo}}</p>
                  </div>
                  
              </a>
              <a href="noticia/{{$video['pasta']}}">
                <div class="container-texto-projeto container-texto-projeto-video mt-20">
                  <h1 class="titulo-texto titulo-texto-video">{!! nl2br($video->titulo) !!}</h1>
                  <p class="texto-segundario texto-segundario-video">{!! nl2br($video->descricao) !!}</p>
                </div>
              </a>    
            </div>
            
        </div>
        @endforeach
      @else
        <div class="row">
          <div class="col-12">
            <p class="text-center">Ainda não temos nenhum vídeo</p>
          </div>
        </div>
      @endif
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-videos paginacao-scroll"></div>
</div>
</div>
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop