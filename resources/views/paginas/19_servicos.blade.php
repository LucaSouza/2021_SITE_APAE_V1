@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Serviços Prestados</h1>
      <h4 class="sub-titulo-section">aqui você fica de olho em todos os serviços prestamos pela nossa entidade.</h4>
    </div>
</div>
<div class="row justify-content-center">
    <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-3">
      <a href="/assistencia-social">
        <img class="card-img" src="{{asset('img/financeiro.jpg')}}" alt="Card image">
        <div class="card-img-overlay img-overlay-servico">
          <h1 class="card-servicos-title">Centro de Assistência Social</h1>
        </div>
      </a>
    </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-3">
    <a href="/centro-educacao">
      <img class="card-img" src="{{asset('img/documentos.jpg')}}" alt="Card image">
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Centro de Educação</h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-3">
    <a href="/centro-saude">
      <img class="card-img" src="{{asset('img/parceiros.jpg')}}" alt="Card image">
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Centro de Saúde</h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-3">
    <a href="/centro-equoterapia">
      <img class="card-img" src="{{asset('img/parceiros.jpg')}}" alt="Card image">
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Centro de Equoterapia</Em></h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-3">
    <a href="/gestao-administrativa">
      <img class="card-img" src="{{asset('img/parceiros.jpg')}}" alt="Card image">
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title gestao-adm">Gestão Administrativa, Financeira, Técnica Operacional e Tecnologia</h1>
        
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
