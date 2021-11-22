<!--SECTION EVENTOS PAGINA PRINCIPAL-->
@section('slide-secundario')
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
        <div class="contraste-base-projeto item">
          <div class="movie">
            <div class="movie__data">
              <div class="movie__poster">
                <span class="movie__poster--fill">
                  <img src="{{asset('img/capa')}}/{{$evento->img}}" />
                </span>
                <span class="movie__poster--featured">
                  <img src="{{asset('img/capa')}}/{{$evento->img}}" />
                </span>
              </div>
              <div class="movie__details">
                <h2 class="movie__title">{{$evento->titulo}}</h2>
                
                <p class="movie__plot">{!!date( 'd/m/Y' , strtotime($evento->data))!!} - {{$evento->hora}}</p>
                <div class="movie__credits">
                  <p><strong>Local:</strong> {{$evento->palestrante}}</p>
                  <p><strong>Valor:</strong> {{$evento->valor}}</p>
                  <!--<a type="button" href="/inscricao/01" name="button" class="btn btn-primary">Inscrição</a>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-eventos paginacao-scroll"></div>
</div>
</div>
@stop