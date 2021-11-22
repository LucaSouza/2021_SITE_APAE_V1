@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row selecao-projeto-noticia container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Doação</h1>
    </div>
</div>
<div class="row container-logos-bancos justify-content-center">
  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-4 logo-container">
    <div class="col container-logo-imagem">
      <img src="{{asset('storage/fotos/icon-img/logo-pix.png')}}" class="logo-doacao rounded mx-auto d-block" alt="LOGO-PIX">
    </div>
    <div class="col">
      <p class="text-center texto-geral"><b>apae.na@globo.com</b></p>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-4 justify-content-center logo-container">
    <div class="col container-logo-imagem">
      <img src="{{asset('storage/fotos/icon-img/logo-bb.png')}}" class="logo-doacao rounded mx-auto d-block" alt="LOGO-BB">
    </div>
    <div class="col">
      <p class="texto-geral text-center"><strong>Agência: 0728-5<br>Conta Corrente: 17959-0<br>CNPJ: 03.923.838/0001-00</p></strong>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-4 justify-content-center logo-container">
    <div class="col container-logo-imagem">
      <img src="{{asset('storage/fotos/icon-img/logo-pagseguro.png')}}" class="logo-doacao rounded mx-auto d-block" alt="LOGO-PIX">
    </div>
    <div class="col">
      <p class="texto-geral text-center"><strong><a href="https://pag.ae/7Xms97d9t" target="_blank" rel="noopener noreferrer">Link para doação</a></strong></p>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-4 justify-content-center logo-container">
    <div class="col container-logo-imagem">
      <img src="{{asset('storage/fotos/icon-img/logo-x-cap.svg')}}" class="logo-doacao rounded mx-auto d-block" alt="LOGO-CAP">
    </div>
    <div class="col">
      <p class="texto-geral text-center"><strong><a href="https://www.xcapdobem.com.br/compra/titulo" target="_blank" rel="noopener noreferrer">Link para doação</a></strong></p>
    </div>
  </div>
</div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop
