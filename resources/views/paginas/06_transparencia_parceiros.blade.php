@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop


<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="selecao-projeto-noticia">
    <div class="row justify-content-center selecao-transparencia">
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-8 col-xxl-6 table-container">
          <p class="titulo-table">Parcerias</p>
          <table id="datatable" class="table">
            <thead>
              <tr>
                  <th>Nome</th>
                  <th>Ano</th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($parcerias as $parceria)
                    <tr>
                        <td><span class="tipo_arquivos"></span><a class="nome-arquivo-transparencia" target="_blank" href="{{$parceria->link}}">{{$parceria->titulo}}</a></td>
                        <td>{{$parceria->ano}}</td>
                        <td><a target="_blank" href="{{$parceria->link}}"><ion-icon name="cloud-download-outline" class="cloud-download"></ion-icon></a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>

@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop