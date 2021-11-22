@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Gestão</h1>
      <!--<h4 class="sub-titulo-section">todas as gestões</h4>-->
    </div>
</div>
<div class="container-container-01">
<div class="container-projetos row">
   <div class=""></div>
    <!--Timeline carousel-->
      <section class="owl-container-gestao owl-theme owl-carousel">
         @foreach ($gestoes as $gestao)
            <!--Timeline item-->
            <div class="item swiper-slide timeline-carousel__item container-gestao rounded-3">
               <div class="timeline-carousel__item-inner">
               <div class="media-wrapper media-wrapper--overlay rounded-3" style="background: url(storage/gestao/{{$gestao->capa}}) center center no-repeat; background-size:cover;"></div>
                  <span class="year presidente">{{$gestao->presidente}}</span>
                  <span class="month">{{$gestao->ano_inicio}} - {{$gestao->ano_fim}}</span>
                     <div class="accordion" id="accordionExample{{$gestao->id}}">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne{{$gestao->id}}">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$gestao->id}}" aria-expanded="true" aria-controls="collapseOne{{$gestao->id}}">
                          <b class="gestao-titulo">Diretoria Executiva</b>
                           </button>
                        </h2>
                        <div id="collapseOne{{$gestao->id}}" class="accordion-collapse collapse show" aria-labelledby="headingOne{{$gestao->id}}" data-bs-parent="#accordionExample{{$gestao->id}}">
                           <div class="accordion-body">
                              {!! nl2br($gestao->diretoria_executiva) !!} 
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo{{$gestao->id}}">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$gestao->id}}" aria-expanded="false" aria-controls="collapseTwo{{$gestao->id}}">
                           <b class="gestao-titulo">Conselho de Administração</b>
                           </button>
                        </h2>
                        <div id="collapseTwo{{$gestao->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo{{$gestao->id}}" data-bs-parent="#accordionExample{{$gestao->id}}">
                           <div class="accordion-body">
                              {!! nl2br($gestao->conselho_adm) !!} 
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree{{$gestao->id}}">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree{{$gestao->id}}" aria-expanded="false" aria-controls="collapseThree{{$gestao->id}}">
                           <b class="gestao-titulo">Conselho Fiscal</b>
                           </button>
                        </h2>
                        <div id="collapseThree{{$gestao->id}}" class="accordion-collapse collapse" aria-labelledby="headingThree{{$gestao->id}}" data-bs-parent="#accordionExample{{$gestao->id}}">
                           <div class="accordion-body">
                           <strong>Membros Efetivos</strong></br>{!! nl2br($gestao->membros_efetivos) !!}  
                           <strong></br></br>Membros Suplentes</strong> 
                           </br>{!! nl2br($gestao->menbros_suplentes) !!}  
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour{{$gestao->id}}">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour{{$gestao->id}}" aria-expanded="false" aria-controls="collapseFour{{$gestao->id}}">
                           <b class="gestao-titulo">Conselho Consultivo</b>
                           </button>
                        </h2>
                        <div id="collapseFour{{$gestao->id}}" class="accordion-collapse collapse" aria-labelledby="headingFour{{$gestao->id}}" data-bs-parent="#accordionExample{{$gestao->id}}">
                           <div class="accordion-body">
                           {!! nl2br($gestao->conselho_consultivo) !!}
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingDefensores{{$gestao->id}}">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDefensores{{$gestao->id}}" aria-expanded="false" aria-controls="collapseDefensores{{$gestao->id}}">
                           <b class="gestao-titulo">Auto Defensores</b>
                           </button>
                        </h2>
                        <div id="collapseDefensores{{$gestao->id}}" class="accordion-collapse collapse" aria-labelledby="headingDefensores{{$gestao->id}}" data-bs-parent="#accordionExample{{$gestao->id}}">
                           <div class="accordion-body">
                           {!! nl2br($gestao->defensores) !!}
                           </div>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
            @endforeach
            <!--/Timeline item-->
      </section>
</div>
</div>     
<!--Timeline carousel-->
<!-- Add Pagination -->

@stop
<!--SECTION CONTEUDO PAGINA PRINCIPAL-->

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop