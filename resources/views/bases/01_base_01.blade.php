<!DOCTYPE html>
<html lang="pt-br" dir="ltr"> 
<head>
    <!-- META HTML -->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>{{$compartilhamento->titulo}}</title>
    <link rel="sortcut icon" href="{{asset('storage/fotos/icon-img/logo-apae-aba.png')}}" type="image/gif" />
    <meta name="description" content="Apae de nova andradina, localizada em mato grosso do sul no municipio de nova andradina,
    fundada em 31 de agosto de 1981. Associação civil, filantrópica, beneficente, profissionalizante, defesa e garantia de direitos, esporte, cultura, lazer, estudo, pesquisa e outros.">
    <meta name="keywords" content="apae de nova andradina, apae de nova andradina-ms, apae, nova andradina,
    apae nova andradina, nova andradina, nova andradina - ms, apaena, apae na, apaenovaandradina, apae nova andradina-ms, apaebrasil,
    apae ms, apaems, apae-ms, apae mato grosso do sul, mato grosso do sul, Associação civil, filantrópica, beneficente, profissionalizante, defesa,
    garantia de direitos, esporte, cultura, lazer, estudo, pesquisa, Associação De Pais E Amigos Dos Excepcionais De Nova Andradina">
    <!-- FIM META HTML -->

    <!-- OG COMPARTILHAMETO -->
    <meta property="og:url"           content="{{url()->full()}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$compartilhamento->titulo}}" />
    <meta property="og:description"   content="{{$compartilhamento->descricao}}" />
    <meta property="og:locale"        content="pt_BR">
    <meta property="og:site_name"     content="APAE DE NOVA ANDRADINA">
    <meta property="og:image:width"   content="600">
    <meta name="robots"               content="max-image-preview:large">
    <meta property="og:image"         content="{{asset('storage')}}/{{$compartilhamento->pasta}}/{{$compartilhamento->imagem}}"/>
    <meta name="author"               content="APAE DE NOVA ANDRADINA">
    <meta name="publisher"            content="APAE DE NOVA ANDRADINA">
    <!-- FIM OG COMPARTILHAMETO -->

    <!-- ICON ABA -->
    <link rel="sortcut icon" href="{{asset('img/capa/logo-apae-aba.png')}}" type="image/gif" />
    <!-- FIM ICON ABA -->

    <!-- ARQUIVOS EXTERNOS -->
    <link href="{{asset('css/fontawesome/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome/brands.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome/solid.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fresco.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Open+Sans:ital,wght@0,300;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- FIM ARQUIVOS EXTERNOS -->

     <!-- TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FIM TOKEN -->

</head>
<body>

    <header class="container-fluid">
        @yield('menu')
    </header>
    <div class="container-fluid p-0 overflow-hidden">
        @yield('slide')
    </div>
    <main class="container-fluid overflow-hidden">
      <div class="pr-2">
        @yield('lojinha')
        @yield('projetos')
        @yield('noticias')
        @yield('slide-secundario')
        @yield('videos')
        @yield('eventos')
        @yield('conteudo')
      </div>
    </main>
    
    <footer class="container-fluid">
        @yield('footer')
    </footer>
    
    <!-- Messenger Plugin de bate-papo Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de bate-papo code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "853053661475317");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>


<!-- ARQUIVOS EXTERNOS -->
<script defer src="{{asset('js/fontawesome/all.js')}}"></script>
<script defer src="{{asset('js/fontawesome/brands.js')}}"></script>
<script defer src="{{asset('js/fontawesome/solid.js')}}"></script>
<script defer src="{{asset('js/fontawesome/fontawesome.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('js/fresco.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
<!-- FIM ARQUIVOS EXTERNOS -->
</html>