@extends('bases.02_base_01')



<!--SECTION CONTEUDO PAGINA PRINCIPAL-->
@section('conteudo')
<script>
            function sl () {
                $('#pagseguro_token').val(PagSeguroDirectPayment.getSenderHash())
            }
    </script>

    <button onclick="sl();">GERAR Token</button>

    <form method="post" action="{{ route('boleto_action') }}">
		@csrf
        <input type="text" id="pagseguro_token" name="pagseguro_token"/>
        <button type="submit">GERAR</button>
    </form>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
@stop
