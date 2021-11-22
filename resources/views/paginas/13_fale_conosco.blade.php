@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Fale conosco</h1>
      <!--<h4 class="sub-titulo-section">Liga, manda um whats ou email</h4>-->
    </div>
</div>
<div class="row">
  <div class="col-12">
    <p class="text-center font-weight-normal col-12 font-fale-conosco"><strong>Email:</strong> contato@apaena.org.br</p>
    <p class="text-center font-weight-normal col-12 font-fale-conosco"><strong>Telefone:</strong> (67) 3441-1443</p>
    <p class="text-center font-weight-normal col-12 font-fale-conosco"><strong>Endereço:</strong> João Teodora Braga, 1615, Centro, Nova Andradina, MS</p>
  </div>
</div>
@stop

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop