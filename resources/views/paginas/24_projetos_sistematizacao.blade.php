@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Programa Cidadania Mais Amor</h1>
    </div>
    <p class="texto-geral mt-5 col-12 col-sm-12 col-md-8 col-lg-7 col-xl-9 col-xxl-7 text-justify">O <b>Programa Cidadania Mais Amor</b> tem por objetivo Fomentar junto as
          famílias o conhecimento e a apropriação de recursos e saberes, na busca de promover o enfrentamento de 
          dificuldades, prevenir e restabelecer ruptura de vínculos familiares e sociais, rompendo com padrões
          violadores de direitos e contribuindo na melhoria da qualidade de vida de Pessoas com Deficiência Intelectual
          e Múltipla e transtorno global do desenvolvimento. Consiste em oficina  de aperfeiçoamento, lazer e geração de
          renda, artesanato; culinaria; Orientação sobre gestão financeira; Palestras, Mesa redonda, dinamicas de grupos e
          atendimentos socioassistenciais;</p>
</div>
  <div class="selecao-projeto-noticia">
    <div class="row justify-content-center">
      @foreach ($sistematização as $projeto)
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
        {!!$sistematizacao->links()!!}
  </div>
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop