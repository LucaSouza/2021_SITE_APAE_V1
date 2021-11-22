@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-sem-slide">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Notícias</h1>
      <!--<h4 class="sub-titulo-section">aqui você fica de olho em tudo</h4>-->
    </div>
</div>
  
    <div class="row justify-content-center">
      @foreach ($noticias as $noticia)
          <div class="container-titulo-section container-noticia container-noticia-corpo col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-10 overflow-hiddens"> 
            <a href="noticia/{{$noticia->link}}" class="row justify-content-center">
            
                <div class="container-img-noticia-corpo col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 rounded-3">
                  <picture>
                    <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/360px/capa/{{$noticia['capa']}}" media="(max-width:360px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/580px/capa/{{$noticia['capa']}}" media="(max-width:580px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/768px/capa/{{$noticia['capa']}}" media="(max-width:768px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1200px/capa/{{$noticia['capa']}}" media="(max-width:1200px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1500px/capa/{{$noticia['capa']}}" media="(max-width:1500px)">
                    <source srcset="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/1900px/capa/{{$noticia['capa']}}" media="(max-width:1920px)">
                    <img src="{{asset('storage/fotos')}}/{{$noticia['pasta']}}/360px/capa/{{$noticia['capa']}}" alt="banner-{{$noticia['pasta']}}" class="img-noticia-corpo">
                  </picture>
                </div>

                <div class="container-texto-projeto-noticia col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7 sem-margem-top">
                  <h1 class="titulo-texto-noticia">{!! nl2br($noticia->titulo) !!}</h1>
                  <p class="texto-segundario-noticia texto-segundario-noticias">{!! nl2br($noticia->descricao) !!}</p>
                    <div class="text-center row container-tags container-tags-noticia ms-1">
                      @for ($i = 0; $i < count($tags[$noticia->id]); $i++)
                          <div class="t-top t-sm bordered col-3 col-sm-1 col-md-1 col-lg-1col-xl-1 col-xxl-1 me-2 p-1" style="font-size: 0.7rem; min-height: 5%; max-width: 15%; border-radius: 100vw; font-weight: 700; color: white; background-color:{{$tags[$noticia->id][$i]->cor}}; --my-color-var: {{$tags[$noticia->id][$i]->cor}}" data-tooltip="{{$tags[$noticia->id][$i]->tag}}">{{$tags[$noticia->id][$i]->apelido}}</div>
                      @endfor
                      
                  </div>
                  
                </div>
              </a>
          </div>
       @endforeach
    </div>
  </div>
  <div class="nav-paginas">
        {!!$noticias->links()!!}
  </div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop