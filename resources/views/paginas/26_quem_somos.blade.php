@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Quem somos</h1>
      <!--<h4 class="sub-titulo-section">Leia sobre a gente</h4>-->
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
      <p class="text-justify texto-geral">A <b>APAE de Nova Andradina – MS</b>, fundada em 31 de agosto de 1981, regulamentada pelo estatuto social atualizado em 11 de abril de 2017. 
associação civil, filantrópica, beneficente, profissionalizante, defesa e garantia de direitos, esporte, cultura, lazer, estudo, pesquisa e outros.
</br></br><b>Missão:</b></br> Promover e articular ações de defesa e garantia de direitos, prevenção, orientação, formação e apoio à família, buscando a melhoria da qualidade de vida da pessoa com deficiência e à construção de uma sociedade mais justa e solidaria.
</br></br><b>Objetivo:</b> </br>Os serviços oferecidos são de relevância pública e social, limitando-se ao território de Nova Andradina - MS com objetivo de:
</br>• Promover a melhoria da qualidade de vida da pessoa com deficiência, preferencialmente intelectual e múltipla, e transtorno globais do desenvolvimento em todos os ciclos de sua vida (criança, adolescente, jovem, adultos e idosos);
</br>• Prestar serviços de habilitação e reabilitação   que promova a integração da pessoa com deficiência já anteriormente definida e seus familiares a vida comunitária através dos Centros: de Assistência Social, Saúde, Educação e Equoterapia.
      </p>
    </div>
</div>
@stop
<!--SECTION CONTEUDO PAGINA PRINCIPAL-->

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop