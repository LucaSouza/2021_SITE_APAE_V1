@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<div class="row container-titulo-section container-sem-slide justify-content-center">
  <div class="col-12">
    <h1 class="titulo-section-inicio">Programas e Serviços</h1>
    <!--<h4 class="sub-titulo-section">todas as gestões</h4>-->
  </div>
</div>
<div class="container-container-01">
<div class="row justify-content-center align-items-center">
    <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
      <a href="/programas-servicos/garantia-direito">
        <picture>
          <source srcset="{{asset('storage/garantia_de_direito/garantia_de_direito_360.jpg')}}" media="(max-width:360px)">
          <source srcset="{{asset('storage/garantia_de_direito/garantia_de_direito_580.jpg')}}" media="(max-width:580px)">
          <source srcset="{{asset('storage/garantia_de_direito/garantia_de_direito_768.jpg')}}" media="(max-width:768px)">
          <source srcset="{{asset('storage/garantia_de_direito/garantia_de_direito_1200.jpg')}}" media="(max-width:1200px)">
          <source srcset="{{asset('storage/garantia_de_direito/garantia_de_direito_1500.jpg')}}" media="(max-width:1500px)">
          <source srcset="{{asset('storage/garantia_de_direito/garantia_de_direito_1900.jpg')}}" media="(max-width:1900px)">
          <img src="{{asset('storage/garantia_de_direito/garantia_de_direito_360.jpg')}}" alt="Card image" class="card-img">  
        </picture>
        <div class="card-img-overlay img-overlay-servico col-12">
          <h1 class="card-servicos-title">Garantia de Direito</h1>
          <!--<p class="card-servicos-text">Prestação de Serviços Socioassistencial<br><br>saiba mais</p>-->
        </div>
      </a>
    </div>
    <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
      <a href="/programas-servicos/assistencia-social">
        <picture>
          <source srcset="{{asset('storage/assistencia_social/assistencia_social_360.jpg')}}" media="(max-width:360px)">
          <source srcset="{{asset('storage/assistencia_social/assistencia_social_580.jpg')}}" media="(max-width:580px)">
          <source srcset="{{asset('storage/assistencia_social/assistencia_social_768.jpg')}}" media="(max-width:768px)">
          <source srcset="{{asset('storage/assistencia_social/assistencia_social_1200.jpg')}}" media="(max-width:1200px)">
          <source srcset="{{asset('storage/assistencia_social/assistencia_social_1500.jpg')}}" media="(max-width:1500px)">
          <source srcset="{{asset('storage/assistencia_social/assistencia_social_1900.jpg')}}" media="(max-width:1900px)">
          <img src="{{asset('storage/assistencia_social/assistencia_social_360.jpg')}}" alt="Card image" class="card-img">  
        </picture>
        <div class="card-img-overlay img-overlay-servico">
          <h1 class="card-servicos-title">Assistência Social</h1>
        </div>
      </a>
    </div>
    <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/educacao-especial">
      <picture>
        <source srcset="{{asset('storage/educacao_especial/educacao_especial_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/educacao_especial/educacao_especial_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/educacao_especial/educacao_especial_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/educacao_especial/educacao_especial_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/educacao_especial/educacao_especial_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/educacao_especial/educacao_especial_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/educacao_especial/educacao_especial_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Educação Especial</h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/prevencao-saude">
      <picture>
        <source srcset="{{asset('storage/prevencao_saude/prevencao_saude_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/prevencao_saude/prevencao_saude_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/prevencao_saude/prevencao_saude_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/prevencao_saude/prevencao_saude_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/prevencao_saude/prevencao_saude_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/prevencao_saude/prevencao_saude_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/prevencao_saude/prevencao_saude_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Prevenção e Saúde</h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/equoterapia">
      <picture>
        <source srcset="{{asset('storage/equoterapia/equoterapia_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/equoterapia/equoterapia_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/equoterapia/equoterapia_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/equoterapia/equoterapia_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/equoterapia/equoterapia_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/equoterapia/equoterapia_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/equoterapia/equoterapia_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Equoterapia</Em></h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/sustentabilidade">
      <picture>
        <source srcset="{{asset('storage/sustentabilidade/sustentabilidade_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/sustentabilidade/sustentabilidade_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/sustentabilidade/sustentabilidade_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/sustentabilidade/sustentabilidade_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/sustentabilidade/sustentabilidade_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/sustentabilidade/sustentabilidade_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/sustentabilidade/sustentabilidade_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title card-servicos-title-margem">Meio Ambiente e Sustentabilidade</Em></h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/arte-cultura">
      <picture>
        <source srcset="{{asset('storage/arte_cultura/arte_cultura_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/arte_cultura/arte_cultura_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/arte_cultura/arte_cultura_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/arte_cultura/arte_cultura_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/arte_cultura/arte_cultura_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/arte_cultura/arte_cultura_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/arte_cultura/arte_cultura_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Arte e Cultura</h1>
        <!--<p class="card-servicos-text">Por meio da Escola de Educação Especial "Raio de Sol", são prestados serviços para Educação Precoce,
          Pré, Ensino Fundamental, Educação de Jovens e Adultos, Educação Professional e CAEE...<br><br>saiba mais
        </p>-->
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/esporte-lazer">
      <picture>
        <source srcset="{{asset('storage/esporte/esporte_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/esporte/esporte_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/esporte/esporte_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/esporte/esporte_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/esporte/esporte_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/esporte/esporte_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/esporte/esporte_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title">Esporte e Lazer</h1>
        <!--<p class="card-servicos-text">Prestar Atendimento Integral aos usuários da APAE – Nova Andradina - MS,
          visando à prevenção, habilitação e reabilitação através de diagnóstico, avaliações, tratamentos e
          encaminhamentos da Pessoa com Deficiência Intelectual e Múltipla...<br><br>saiba mais</p>-->
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/tecnologia">
      <picture>
        <source srcset="{{asset('storage/tecnologia/tecnologia_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/tecnologia/tecnologia_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/tecnologia/tecnologia_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/tecnologia/tecnologia_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/tecnologia/tecnologia_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/tecnologia/tecnologia_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/tecnologia/tecnologia_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title card-servicos-title-margem gestao-adm">Tecnologia, Sistematização e Comunicação
        </h1>
        <!--<p class="card-servicos-text">Trabalha aspectos afetivo, cognitivo, motores, sensoriais e sociais, tendo por fatores particulares: O Equino<br><br>saiba mais</p>-->
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/gestao-administrativa">
      <picture>
        <source srcset="{{asset('storage/administrativo/administrativo_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/administrativo/administrativo_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/administrativo/administrativo_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/administrativo/administrativo_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/administrativo/administrativo_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/administrativo/administrativo_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/administrativo/administrativo_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title card-servicos-title-margem">Gestão Administrativa e Financeira</h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/infraestrutura">
      <picture>
        <source srcset="{{asset('storage/estrutura/estrutura_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/estrutura/estrutura_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/estrutura/estrutura_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/estrutura/estrutura_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/estrutura/estrutura_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/estrutura/estrutura_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/estrutura/estrutura_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title card-servicos-title-sem-margem">Infraestrutura</h1>
        
      </div>
    </a>
  </div>
  <div class="card bg-white text-white col-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
    <a href="/programas-servicos/mobilidade">
      <picture>
        <source srcset="{{asset('storage/transporte/transporte_360.jpg')}}" media="(max-width:360px)">
        <source srcset="{{asset('storage/transporte/transporte_580.jpg')}}" media="(max-width:580px)">
        <source srcset="{{asset('storage/transporte/transporte_768.jpg')}}" media="(max-width:768px)">
        <source srcset="{{asset('storage/transporte/transporte_1200.jpg')}}" media="(max-width:1200px)">
        <source srcset="{{asset('storage/transporte/transporte_1500.jpg')}}" media="(max-width:1500px)">
        <source srcset="{{asset('storage/transporte/transporte_1900.jpg')}}" media="(max-width:1900px)">
        <img src="{{asset('storage/transporte/transporte_360.jpg')}}" alt="Card image" class="card-img">  
      </picture>
      <div class="card-img-overlay img-overlay-servico">
        <h1 class="card-servicos-title card-servicos-title-sem-margem">Transporte e Mobilidade</h1>
        
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
