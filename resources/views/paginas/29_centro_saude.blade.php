@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
    <div class="col-12">
      <h1 class="titulo-section-inicio">Centro de Saúde</h1>
    </div>
    <p class="texto-geral mt-5 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9 text-justify">
      <b>Centro de Saúde da Apae de Nova Andradina</b>, presta atendimento integral aos usuários dos serviços da APAE – Nova Andradina - MS, visando à prevenção, reabilitação através de diagnóstico, avaliações, tratamentos e encaminhamentos da Pessoa com Deficiência Intelectual e Múltipla. Com atendimentos: medico, enfermagem, fisioterápico, fonoaudiológico, psicológico, psicopedagógico e de segurança alimentar e nutrição;  
     </br></br><b>Projeto qualidade de vida:</b></br>Proporciona ações intersetoriais efetivas de conscientização, prevenção e reeducação de agravos a saúde dos usuários, familiares e profissionais, promovendo assim a melhor qualidade de vida de todos.
     </br></br><b>Estimulação precoce:</b></br>Proporcionar estimulação motora, cognitiva, sensorial e da comunicação, realizar treinamento para criação e manutenção dos hábitos elementares de vida, orientar a família à valorizar e estimular movimentos em seus aspectos socioafetivo, contribuindo para o desenvolvimento neuropsicomotor, articulação com a rede de saúde para as crianças em todos os aspectos necessários, estimular e facilitar posturas e movimentos que favoreçam a aquisição sensório-motora, potencializando o desenvolvimento neuropsicomotor, estabelecer vínculo afetivo e de troca com adultos e crianças, fortalecendo sua autoestima e ampliando gradativamente suas possibilidades de comunicação e integração social. 
    </p>
</div>

<div class="container-projetos row justify-content-center">
  <!-- Additional required wrapper -->
  <div class="owl-container-projetos-corpo owl-theme owl-carousel col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 col-xxl-9">
      <!-- Slides -->
      @foreach ($saude as $projeto)
      <div class="contraste-base-projeto item">
        <a href="/noticia/{{$projeto->link}}">
          <div class="etiqueta-post">
            <span>Centro de Saúde</span>
          </div>
          
          <div class="wrapper-mini rounded-3">
          <picture>
              <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/360px/capa/{{$projeto['capa']}}" media="(max-width:360px)">
              <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/580px/capa/{{$projeto['capa']}}" media="(max-width:580px)">
              <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/768px/capa/{{$projeto['capa']}}" media="(max-width:768px)">
              <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/1200px/capa/{{$projeto['capa']}}" media="(max-width:1200px)">
              <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/1500px/capa/{{$projeto['capa']}}" media="(max-width:1500px)">
              <source srcset="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/1900px/capa/{{$projeto['capa']}}" media="(max-width:1920px)">
              <img src="{{asset('storage/fotos')}}/{{$projeto['pasta']}}/360px/capa/{{$projeto['capa']}}" alt="banner-{{$projeto['pasta']}}" class="img-slide-secundario">
            </picture>
          </div>
          <div class="container-texto-projeto mt-20">
            <h1 class="titulo-texto">{!! nl2br($projeto->titulo) !!}</h1>
            <p class="texto-segundario">{!! nl2br($projeto->descricao) !!}</p>
          </div>
        </a>
    </div>
      @endforeach
  </div>
</div>
  </div>
@stop


<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop