@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
  <div class="selecao-projeto-noticia">
    <div class="row container-titulo-section container-sem-slide-inicio">
        <div class="col-12 texto-descricao">
          <h1 class="titulo-section-nossa-historia">Projetos da assistência social</h1>
          <p class="sub-titulo-section-descricao"><b>SERVIÇO SOCIOASSISTENCIAL</b> - consiste em acolhida, escuta, informação, comunicação e defesa de direitos, articulação com serviço de políticas públicas setoriais, 
          articulação da rede de serviço sócios assistenciais, atividades de convívio e de organização da vida cotidiana, orientação e encaminhamentos para a rede de serviços locais, referência e contra 
          referência, construção do plano individual de atendimento, orientação sócio familiar, estudo social, diagnóstico socioeconômico, cuidados pessoais, desenvolvimento do convívio familiar e social, acesso a documentação pessoal,
          apoio a família na sua função protetiva, mobilização de família extensa ou ampliada, mobilização e fortalecimento do convívio e de redes sociais de apoio, mobilização para o exercício da cidadania, elaboração de ficha evolutiva e relatórios.</p>
        </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-6 col-sm-12 container-titulo-section">
          <a href="projetos-educacao/projeto-01">
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
      <div class="col-xl-4 col-lg-6 col-sm-12 container-titulo-section">
          <a href="projetos-educacao/projeto-02">
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
      <div class="col-xl-4 col-lg-6 col-sm-12 container-titulo-section">
          <a href="projetos-educacao/projeto-03">
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
      <div class="col-xl-4 col-lg-6 col-sm-12 container-titulo-section">
          <a href="projetos-educacao/projeto-04">
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
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop