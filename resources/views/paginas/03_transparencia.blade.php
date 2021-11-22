@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Transparência</h1>
      <!--<h4 class="sub-titulo-section">aqui você fica de olho em tudo</h4>-->
    </div>
</div>
<div class="row justify-content-center">
    <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
      <a href="/balancos">
        <img class="card-img transparencia" src="{{asset('storage/financeiro.jpg')}}" alt="Card image">
        <div class="card-img-overlay card-img-overlay img-overlay-servico">
          <h1 class="card-servicos-title">Balanços</h1>
          <p class="card-servicos-text"></p>
        </div>
      </a>
    </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
    <a href="/documentos">
      <img class="card-img transparencia" src="{{asset('storage/documentos.jpg')}}" alt="Card image">
      <div class="card-img-overlay card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Documentações</h1>
        <p class="card-servicos-text"></p>
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
    <a href="/parceiros">
      <img class="card-img transparencia" src="{{asset('storage/parceiros.jpg')}}" alt="Card image">
      <div class="card-img-overlay card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Parcerias</h1>
        <p class="card-servicos-text"></p>
      </div>
    </a>
  </div>
</div>
<!--
  <div class="selecao-projeto-noticia selecao-transparencia">
    <div class="row">
        <div class="col-12">
          <table id="example" class="display">
            <thead>
              <tr>
                  <th>Nome</th>
                  <th>Ano</th>
                  <th>Arquivo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>Prestação de Feas - 2021</td>
                  <td>2021</td>
                  <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                  <td>Prestação de Contas - 2021</td>
                  <td>2021</td>
                  <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                  <td>Prestação de Contas - 2021</td>
                  <td>2019</td>
                  <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                  <td>Prestação de Contas - 2021</td>
                  <td>2021</td>
                  <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                  <td>Prestação de Contas - 2021</td>
                  <td>2021</td>
                  <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                  <td>Prestação de Feas - 1988</td>
                  <td>1988</td>
                  <td><a href="#">Visualizar</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
!-->

@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop
