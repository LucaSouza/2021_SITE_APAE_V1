<!DOCTYPE html>
<html lang="pt-br" dir="ltr"> 
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APAE DE NOVA ANDRADINA</title>

    <!-- ARQUIVOS EXTERNOS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/boleto.css')}}">
    <!-- FIM ARQUIVOS EXTERNOS -->


</head>
<body>
    <header class="container-fluid">
      @yield('menu')
      @yield('slide')
    </header>

    <main class="container-fluid">
      <div class="padding-main">
        @yield('lojinha')
        @yield('projetos')
        @yield('noticias')
        @yield('videos')
        @yield('eventos')
        @yield('conteudo')
      </div>
    </main>
    <footer class="container-fluid">
        @yield('footer')
    </footer>
</body>
<!-- ARQUIVOS EXTERNOS -->
<script src="{{asset('js/bootstrap.js')}}" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" charset="utf-8"></script>
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
<!-- FIM ARQUIVOS EXTERNOS -->
</html>