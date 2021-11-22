  <div class="row">
      <!-- Additional required wrapper -->
      <div class="container-img-background">
        <img src="{{asset('img/capa/gradient-blue.jpg')}}" alt="" class="img-slide-background">
      </div>
      <div class="owl-carousel-slide-inicio owl-theme owl-carousel">
      
          <!-- Slides -->
          @foreach ($array_banners as $banner)
          <div class="slide-principal-container item">
            <a href="{{$banner['link'] == null ? '' : 'noticia/'}}{{$banner['link']}}">
                <picture>
                  <source srcset="{{asset('storage/fotos')}}/{{$banner['pasta']}}/360px/capa/{{$banner['capa']}}" media="(max-width:360px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner['pasta']}}/580px/capa/{{$banner['capa']}}" media="(max-width:580px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner['pasta']}}/768px/capa/{{$banner['capa']}}" media="(max-width:768px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner['pasta']}}/1200px/capa/{{$banner['capa']}}" media="(max-width:1200px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner['pasta']}}/1500px/capa/{{$banner['capa']}}" media="(max-width:1500px)">
                  <source srcset="{{asset('storage/fotos')}}/{{$banner['pasta']}}/1900px/capa/{{$banner['capa']}}" media="(max-width:1920px)">
                  <img src="{{asset('storage/fotos')}}/{{$banner['pasta']}}/360px/capa/{{$banner['capa']}}" alt="banner-{{$banner['pasta']}}" class="img-slide">
                </picture>

            <div class="descricao">
              <h1 class="titulo-slide">{!! nl2br($banner['titulo']) !!}</h1>
              <!--<h3 class="texto-slide">{!! nl2br($banner['descricao']) !!}</h3>-->
            </div>
            </a>
          </div>
          @endforeach
      </div>
  </div>