@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
    @include('menus.01_menu')
@stop

@section('conteudo')
<div class="selecao-projeto-noticia">
  <div class="row container-titulo-section container-sem-slide-inicio">
      <div class="col-12">
        <h1 class="titulo-section-nossa-historia">Centro de assistência social</h1>
        <h4 class="sub-titulo-section">Serviço Socioassistencial</h4>
      </div>
      <div class="col-12">
        <a href="projetos/projetos-social" class="float-right ver-tudo">ver tudo</a>
      </div>
  </div>
  <div class="swiper-container swiper-container-projetos row">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <a href="/projeto/01">
            <div class="etiqueta-post">
              <span>assistência social</span>
            </div>
            <div>
              <picture>
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/jardim.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">01</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projeto/02">
            <div class="etiqueta-post">
              <span>assistência social</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/equoterapia.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">02</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projeto/03">
            <div class="etiqueta-post">
              <span>assistência social</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/equoterapia.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">03</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projeto/04">
            <div class="etiqueta-post">
              <span>assistência social</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/editado-68.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">04</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
         </div>
      </div>
  </div>
</div>
<div class="selecao-projeto-noticia">
  <div class="row container-titulo-section container-sem-slide-inicio">
      <div class="col-12">
        <h1 class="titulo-section-nossa-historia">Centro de Educação</h1>
        <h4 class="sub-titulo-section">temos muitos, temos vários</h4>
      </div>
      <div class="col-12">
        <a href="/projetos/projetos-social" class="float-right ver-tudo">ver tudo</a>
      </div>
  </div>
  <div class="swiper-container swiper-container-projetos row">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <a href="/projeto/05">
            <div class="etiqueta-post">
              <span>Centro de Educação</span>
            </div>
            <div>
              <picture>
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/jardim.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">jardim sensorial</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projeto/06">
            <div class="etiqueta-post">
              <span>assistência social</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/equoterapia.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">equoterapia</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projeto/07">
            <div class="etiqueta-post">
              <span>assistência social</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/editado-68.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="pd-10 container-texto-projeto">
              <h1 class="titulo-texto">música</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
         </div>
      </div>
  </div>
</div>
<div class="selecao-projeto-noticia">
  <div class="row container-titulo-section container-sem-slide-inicio">
      <div class="col-12">
        <h1 class="titulo-section-nossa-historia">Centro de saúde</h1>
        <h4 class="sub-titulo-section">temos muitos, temos vários</h4>
      </div>
      <div class="col-12">
        <a href="/projetos/projetos-saude" class="float-right ver-tudo">ver tudo</a>
      </div>
  </div>
  <div class="swiper-container swiper-container-projetos row">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <a href="/projetos/projetos-educacao/projeto-01">
            <div class="etiqueta-post">
              <span>saúde</span>
            </div>
            <div>
              <picture>
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/jardim.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">jardim sensorial</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projetos/projetos-educacao/projeto-01">
            <div class="etiqueta-post">
              <span>saúde</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/equoterapia.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">equoterapia</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projetos/projetos-educacao/projeto-01">
            <div class="etiqueta-post">
              <span>saúde</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/editado-68.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="pd-10 container-texto-projeto">
              <h1 class="titulo-texto">música</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
         </div>
      </div>
  </div>
</div>
<div class="selecao-projeto-noticia">
  <div class="row container-titulo-section container-sem-slide-inicio">
      <div class="col-12">
        <h1 class="titulo-section-nossa-historia">Centro de Equoterapia</h1>
        <h4 class="sub-titulo-section">temos muitos, temos vários</h4>
      </div>
      <div class="col-12">
        <a href="/projetos/projetos-equoterapia" class="float-right ver-tudo">ver tudo</a>
      </div>
  </div>
  <div class="swiper-container swiper-container-projetos row">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <a href="/projetos/projetos-educacao/projeto-01">
            <div class="etiqueta-post">
              <span>equoterapia</span>
            </div>
            <div>
              <picture>
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/jardim.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/jardim.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">jardim sensorial</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projetos/projetos-educacao/projeto-01">
            <div class="etiqueta-post">
              <span>equoterapia</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/equoterapia.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/equoterapia.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">equoterapia</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/projetos/projetos-educacao/projeto-01">
            <div class="etiqueta-post">
              <span>equoterapia</span>
            </div>
            <div class="">
              <picture>
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:360px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:580px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:768px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1200px)">
                <source srcset="{{asset('img/editado-68.jpg')}}" media="(max-width:1920px)">
                <img src="{{asset('img/editado-68.jpg')}}" alt="" class="img-slide-secundario">
              </picture>
            </div>
            <div class="container-texto-projeto">
              <h1 class="titulo-texto">música</h1>
              <p class="texto-segundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor quaerat quo omnis illo sequi at velit, odit quod!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            </a>
         </div>
      </div>
  </div>
</div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop

