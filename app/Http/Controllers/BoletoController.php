<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoletoController extends Controller
{
    public function gerarBoleto(){         
        // ------------------------- DADOS DIN�MICOS DO SEU CLIENTE PARA A GERA��O DO BOLETO (FIXO OU VIA GET) -------------------- //
        // Os valores abaixo podem ser colocados manualmente ou ajustados p/ formul�rio c/ POST, GET ou de BD (MySql,Postgre,etc)	//

        // DADOS DO BOLETO PARA O SEU CLIENTE
        $dias_de_prazo_para_pagamento = 5;
        $taxa_boleto = 0.00;
        $data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006"; 
        $valor_cobrado = "55,00"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
        $valor_cobrado = str_replace(",", ".",$valor_cobrado);
        $valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

        $dadosboleto["nosso_numero"] = "87654";
        $dadosboleto["numero_documento"] = "27.030195.10";	// Num do pedido ou do documento
        $dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
        $dadosboleto["data_documento"] = date("d/m/Y"); // Data de emiss�o do Boleto
        $dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
        $dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com v�rgula e sempre com duas casas depois da virgula

        // DADOS DO SEU CLIENTE
        $dadosboleto["sacado"] = "TECIDOS FARIA DUARTE - 74.910.037/0001-93";
        $dadosboleto["endereco1"] = "";
        $dadosboleto["endereco2"] = "";

        // INFORMACOES PARA O CLIENTE
        $dadosboleto["demonstrativo1"] = "Doação para APAE DE NOVA ANDRADINA - MS";
        $dadosboleto["demonstrativo2"] = "";
        $dadosboleto["demonstrativo3"] = "";

        // INSTRU��ES PARA O CAIXA
        $dadosboleto["instrucoes1"] = "";
        $dadosboleto["instrucoes2"] = "- Receber até 10 dias após o vencimento";
        $dadosboleto["instrucoes3"] = "- Em caso de dúvidas entre em contato conosco: admfinanceiro@apaena.org.br";
        $dadosboleto["instrucoes4"] = "";

        // DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
        $dadosboleto["quantidade"] = "";
        $dadosboleto["valor_unitario"] = "";
        $dadosboleto["aceite"] = "N";		
        $dadosboleto["especie"] = "R$";
        $dadosboleto["especie_doc"] = "DM";


        // ---------------------- DADOS FIXOS DE CONFIGURA��O DO SEU BOLETO --------------- //


        // DADOS DA SUA CONTA - BANCO DO BRASIL
        $dadosboleto["agencia"] = "07285"; // Num da agencia, sem digito
        $dadosboleto["conta"] = "403601"; 	// Num da conta, sem digito

        // DADOS PERSONALIZADOS - BANCO DO BRASIL
        $dadosboleto["convenio"] = "7777777";  // Num do conv�nio - REGRA: 6 ou 7 ou 8 d�gitos
        $dadosboleto["contrato"] = "999999"; // Num do seu contrato
        $dadosboleto["carteira"] = "18";
        $dadosboleto["variacao_carteira"] = "-019";  // Varia��o da Carteira, com tra�o (opcional)

        // TIPO DO BOLETO
        $dadosboleto["formatacao_convenio"] = "7"; // REGRA: 8 p/ Conv�nio c/ 8 d�gitos, 7 p/ Conv�nio c/ 7 d�gitos, ou 6 se Conv�nio c/ 6 d�gitos
        $dadosboleto["formatacao_nosso_numero"] = "2"; // REGRA: Usado apenas p/ Conv�nio c/ 6 d�gitos: informe 1 se for NossoN�mero de at� 5 d�gitos ou 2 para op��o de at� 17 d�gitos

        /*
        #################################################
        DESENVOLVIDO PARA CARTEIRA 18

        - Carteira 18 com Convenio de 8 digitos
        Nosso n�mero: pode ser at� 9 d�gitos

        - Carteira 18 com Convenio de 7 digitos
        Nosso n�mero: pode ser at� 10 d�gitos

        - Carteira 18 com Convenio de 6 digitos
        Nosso n�mero:
        de 1 a 99999 para op��o de at� 5 d�gitos
        de 1 a 99999999999999999 para op��o de at� 17 d�gitos

        #################################################
        */
     

        // SEUS DADOS
        $dadosboleto["identificacao"] = "";
        $dadosboleto["cpf_cnpj"] = "03.923.828/0001-00";
        $dadosboleto["endereco"] = "João Teodoro Braga, 1615";
        $dadosboleto["cidade_uf"] = "Nova Andradina / MS";
        $dadosboleto["cedente"] = "ASSOC DE PAIS E AMIGOS DOS EXCEPCIONAIS NOVA ANDRADINA - 03.923.828/0001-00";
        
        $codigobanco = "001";
        $codigo_banco_com_dv = BoletoController::geraCodigoBanco($codigobanco);
        $nummoeda = "9";
        $fator_vencimento = BoletoController::fator_vencimento($dadosboleto["data_vencimento"]);

        //valor tem 10 digitos, sem virgula
        $valor = BoletoController::formata_numero($dadosboleto["valor_boleto"],10,0,"valor");
        //agencia � sempre 4 digitos
        $agencia = BoletoController::formata_numero($dadosboleto["agencia"],4,0);
        //conta � sempre 8 digitos
        $conta = BoletoController::formata_numero($dadosboleto["conta"],8,0);
        //carteira 18
        $carteira = $dadosboleto["carteira"];
        //agencia e conta
        $agencia_codigo = $agencia."-". BoletoController::modulo_11($agencia) ." / ". $conta ."-". BoletoController::modulo_11($conta);
        //Zeros: usado quando convenio de 7 digitos
        $livre_zeros='000000';

        // Carteira 18 com Conv�nio de 8 d�gitos
        if ($dadosboleto["formatacao_convenio"] == "8") {
            $convenio = BoletoController::formata_numero($dadosboleto["convenio"],8,0,"convenio");
            // Nosso n�mero de at� 9 d�gitos
            $nossonumero = BoletoController::formata_numero($dadosboleto["nosso_numero"],9,0);
            $dv=BoletoController::modulo_11("$codigobanco$nummoeda$fator_vencimento$valor$livre_zeros$convenio$nossonumero$carteira");
            $linha="$codigobanco$nummoeda$dv$fator_vencimento$valor$livre_zeros$convenio$nossonumero$carteira";
            //montando o nosso numero que aparecer� no boleto
            $nossonumero = $convenio . $nossonumero ."-". BoletoController::modulo_11($convenio.$nossonumero);
        }

        // Carteira 18 com Conv�nio de 7 d�gitos
        if ($dadosboleto["formatacao_convenio"] == "7") {
            $convenio = BoletoController::formata_numero($dadosboleto["convenio"],7,0,"convenio");
            // Nosso n�mero de at� 10 d�gitos
            $nossonumero = BoletoController::formata_numero($dadosboleto["nosso_numero"],10,0);
            $dv=BoletoController::modulo_11("$codigobanco$nummoeda$fator_vencimento$valor$livre_zeros$convenio$nossonumero$carteira");
            $linha="$codigobanco$nummoeda$dv$fator_vencimento$valor$livre_zeros$convenio$nossonumero$carteira";
        $nossonumero = $convenio.$nossonumero;
            //N�o existe DV na composi��o do nosso-n�mero para conv�nios de sete posi��es
        }

        // Carteira 18 com Conv�nio de 6 d�gitos
        if ($dadosboleto["formatacao_convenio"] == "6") {
            $convenio = BoletoController::formata_numero($dadosboleto["convenio"],6,0,"convenio");
            
            if ($dadosboleto["formatacao_nosso_numero"] == "1") {
                
                // Nosso n�mero de at� 5 d�gitos
                $nossonumero = BoletoController::formata_numero($dadosboleto["nosso_numero"],5,0);
                $dv = BoletoController::modulo_11("$codigobanco$nummoeda$fator_vencimento$valor$convenio$nossonumero$agencia$conta$carteira");
                $linha = "$codigobanco$nummoeda$dv$fator_vencimento$valor$convenio$nossonumero$agencia$conta$carteira";
                //montando o nosso numero que aparecer� no boleto
                $nossonumero = $convenio . $nossonumero ."-". BoletoController::modulo_11($convenio.$nossonumero);
            }
            
            if ($dadosboleto["formatacao_nosso_numero"] == "2") {
                
                // Nosso n�mero de at� 17 d�gitos
                $nservico = "21";
                $nossonumero = BoletoController::formata_numero($dadosboleto["nosso_numero"],17,0);
                $dv = BoletoController::modulo_11("$codigobanco$nummoeda$fator_vencimento$valor$convenio$nossonumero$nservico");
                $linha = "$codigobanco$nummoeda$dv$fator_vencimento$valor$convenio$nossonumero$nservico";
            }
        }

        $dadosboleto["codigo_barras"] = $linha;
        $dadosboleto["linha_digitavel"] = BoletoController::monta_linha_digitavel($linha);
        $dadosboleto["agencia_codigo"] = $agencia_codigo;
        $dadosboleto["nosso_numero"] = $nossonumero;
        $dadosboleto["codigo_banco_com_dv"] = $codigo_banco_com_dv;

        $codBarras = BoletoController::fbarcodee($valor);

        return view('paginas.17_boleto')->with(['dadosboleto' => $dadosboleto, 'codBarras' => $codBarras]);
    }

    public function formata_numero($numero,$loop,$insert,$tipo = "geral") {
        if ($tipo == "geral") {
            $numero = str_replace(",","",$numero);
            while(strlen($numero)<$loop){
                $numero = $insert . $numero;
            }
        }
        if ($tipo == "valor") {
            /*
            retira as virgulas
            formata o numero
            preenche com zeros
            */
            $numero = str_replace(",","",$numero);
            while(strlen($numero)<$loop){
                $numero = $insert . $numero;
            }
        }
        if ($tipo == "convenio") {
            while(strlen($numero)<$loop){
                $numero = $numero . $insert;
            }
        }
        return $numero;
    }

    public function esquerda($entra,$comp){
        return substr($entra,0,$comp);
    }
    
    public function direita($entra,$comp){
        return substr($entra,strlen($entra)-$comp,$comp);
    }
    
    public function fbarcodee($valor){

        $fino = 1 ;
        $largo = 3 ;
        $altura = 50 ;

          $barcodes[0] = "00110" ;
          $barcodes[1] = "10001" ;
          $barcodes[2] = "01001" ;
          $barcodes[3] = "11000" ;
          $barcodes[4] = "00101" ;
          $barcodes[5] = "10100" ;
          $barcodes[6] = "01100" ;
          $barcodes[7] = "00011" ;
          $barcodes[8] = "10010" ;
          $barcodes[9] = "01010" ;
          for($f1=9;$f1>=0;$f1--){ 
            for($f2=9;$f2>=0;$f2--){  
              $f = ($f1 * 10) + $f2 ;
              $texto = "" ;
              for($i=1;$i<6;$i++){ 
                $texto .=  substr($barcodes[$f1],($i-1),1) . substr($barcodes[$f2],($i-1),1);
              }
              $barcodes[$f] = $texto;
            }
          }

          
        
        ?><img src=img/p.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/b.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/p.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/b.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        <?php

        $texto = $valor ;
        if((strlen($texto) % 2) <> 0){
            $texto = "0" . $texto;
        }


        // Draw dos dados
        while (strlen($texto) > 0) {
            $i = round(BoletoController::esquerda($texto,2));
            $texto = BoletoController::direita($texto,strlen($texto)-2);
            $f = $barcodes[$i];
            for($i=1;$i<11;$i+=2){
              if (substr($f,($i-1),1) == "0") {
                $f1 = $fino ;
              }else{
                $f1 = $largo ;
              }
          ?>
              src=img/p.png width=<?php echo $f1?> height=<?php echo $altura?> border=0><img 
          <?php
              if (substr($f,$i,1) == "0") {
                $f2 = $fino ;
              }else{
                $f2 = $largo ;
              }
          ?>
              src=img/b.png width=<?php echo $f2?> height=<?php echo $altura?> border=0><img 
          <?php
            }
          }

          // Draw guarda final
        ?>
        src=img/p.png width=<?php echo $largo?> height=<?php echo $altura?> border=0><img 
        src=img/b.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/p.png width=<?php echo 1?> height=<?php echo $altura?> border=0> 
        <?php


        return '$texto';
        
    }
    public static function fbarcode($valor){
        $fino = 1 ;
        $largo = 3 ;
        $altura = 50 ;
        
          $barcodes[0] = "00110" ;
          $barcodes[1] = "10001" ;
          $barcodes[2] = "01001" ;
          $barcodes[3] = "11000" ;
          $barcodes[4] = "00101" ;
          $barcodes[5] = "10100" ;
          $barcodes[6] = "01100" ;
          $barcodes[7] = "00011" ;
          $barcodes[8] = "10010" ;
          $barcodes[9] = "01010" ;
          for($f1=9;$f1>=0;$f1--){ 
            for($f2=9;$f2>=0;$f2--){  
              $f = ($f1 * 10) + $f2 ;
              $texto = "" ;
              for($i=1;$i<6;$i++){ 
                $texto .=  substr($barcodes[$f1],($i-1),1) . substr($barcodes[$f2],($i-1),1);
              }
              $barcodes[$f] = $texto;
            }
          }
        
      
        //Desenho da barra
        
        
        //Guarda inicial
        ?><img src=img/p.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/b.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/p.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/b.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        <?php
        
        $texto = $valor ;
        if((strlen($texto) % 2) <> 0){
            $texto = "0" . $texto;
        }
        
        // Draw dos dados
        while (strlen($texto) > 0) {
          $i = round(esquerda($texto,2));
          $texto = direita($texto,strlen($texto)-2);
          $f = $barcodes[$i];
          for($i=1;$i<11;$i+=2){
            if (substr($f,($i-1),1) == "0") {
              $f1 = $fino ;
            }else{
              $f1 = $largo ;
            }
        ?>
            src=img/p.png width=<?php echo $f1?> height=<?php echo $altura?> border=0><img 
        <?php
            if (substr($f,$i,1) == "0") {
              $f2 = $fino ;
            }else{
              $f2 = $largo ;
            }
        ?>
            src=img/b.png width=<?php echo $f2?> height=<?php echo $altura?> border=0><img 
        <?php
          }
        }
        
        // Draw guarda final
        ?>
        src=img/p.png width=<?php echo $largo?> height=<?php echo $altura?> border=0><img 
        src=img/b.png width=<?php echo $fino?> height=<?php echo $altura?> border=0><img 
        src=img/p.png width=<?php echo 1?> height=<?php echo $altura?> border=0> 
        <?php

        return "entrou e retornou";
        } //Fim da fun��o
        

        public function fator_vencimento($data) {
            $data = explode("/",$data);
            $ano = $data[2];
            $mes = $data[1];
            $dia = $data[0];
            return(abs((BoletoController::_dateToDays("1997","10","07")) - (BoletoController::_dateToDays($ano, $mes, $dia))));
        }
        
        public function _dateToDays($year,$month,$day) {
            $century = substr($year, 0, 2);
            $year = substr($year, 2, 2);
            if ($month > 2) {
                $month -= 3;
            } else {
                $month += 9;
                if ($year) {
                    $year--;
                } else {
                    $year = 99;
                    $century --;
                }
            }
        
            return ( floor((  146097 * $century)    /  4 ) +
                    floor(( 1461 * $year)        /  4 ) +
                    floor(( 153 * $month +  2) /  5 ) +
                        $day +  1721119);
        }



        /*
        #################################################
        FUN��O DO M�DULO 10 RETIRADA DO PHPBOLETO

        ESTA FUN��O PEGA O D�GITO VERIFICADOR DO PRIMEIRO, SEGUNDO
        E TERCEIRO CAMPOS DA LINHA DIGIT�VEL
        #################################################
        */
        public function modulo_10($num) { 
            $numtotal10 = 0;
            $fator = 2;
        
            for ($i = strlen($num); $i > 0; $i--) {
                $numeros[$i] = substr($num,$i-1,1);
                $parcial10[$i] = $numeros[$i] * $fator;
                $numtotal10 .= $parcial10[$i];
                if ($fator == 2) {
                    $fator = 1;
                }
                else {
                    $fator = 2; 
                }
            }
            
            $soma = 0;
            for ($i = strlen($numtotal10); $i > 0; $i--) {
                $numeros[$i] = substr($numtotal10,$i-1,1);
                $soma += $numeros[$i]; 
            }
            $resto = $soma % 10;
            $digito = 10 - $resto;
            if ($resto == 0) {
                $digito = 0;
            }

            return $digito;
        }

        /*
        #################################################
        FUN��O DO M�DULO 11 RETIRADA DO PHPBOLETO

        MODIFIQUEI ALGUMAS COISAS...

        ESTA FUN��O PEGA O D�GITO VERIFICADOR:

        NOSSONUMERO
        AGENCIA
        CONTA
        CAMPO 4 DA LINHA DIGIT�VEL
        #################################################
        */

        public function modulo_11($num, $base=9, $r=0) {
            $soma = 0;
            $fator = 2; 
            for ($i = strlen($num); $i > 0; $i--) {
                $numeros[$i] = substr($num,$i-1,1);
                $parcial[$i] = $numeros[$i] * $fator;
                $soma += $parcial[$i];
                if ($fator == $base) {
                    $fator = 1;
                }
                $fator++;
            }
            if ($r == 0) {
                $soma *= 10;
                $digito = $soma % 11;
                
                //corrigido
                if ($digito == 10) {
                    $digito = "X";
                }

                /*
                alterado por mim, Daniel Schultz

                Vamos explicar:

                O m�dulo 11 s� gera os digitos verificadores do nossonumero,
                agencia, conta e digito verificador com codigo de barras (aquele que fica sozinho e triste na linha digit�vel)
                s� que � foi um rolo...pq ele nao podia resultar em 0, e o pessoal do phpboleto se esqueceu disso...
                
                No BB, os d�gitos verificadores podem ser X ou 0 (zero) para agencia, conta e nosso numero,
                mas nunca pode ser X ou 0 (zero) para a linha digit�vel, justamente por ser totalmente num�rica.

                Quando passamos os dados para a fun��o, fica assim:

                Agencia = sempre 4 digitos
                Conta = at� 8 d�gitos
                Nosso n�mero = de 1 a 17 digitos

                A unica vari�vel que passa 17 digitos � a da linha digitada, justamente por ter 43 caracteres

                Entao vamos definir ai embaixo o seguinte...

                se (strlen($num) == 43) { n�o deixar dar digito X ou 0 }
                */
                
                if (strlen($num) == "43") {
                    //ent�o estamos checando a linha digit�vel
                    if ($digito == "0" or $digito == "X" or $digito > 9) {
                            $digito = 1;
                    }
                }
                return $digito;
            } 
            elseif ($r == 1){
                $resto = $soma % 11;
                return $resto;
            }
        }

        /*
        Montagem da linha digit�vel - Fun��o tirada do PHPBoleto
        N�o mudei nada
        */
        public function monta_linha_digitavel($linha) {
            // Posi��o 	Conte�do
            // 1 a 3    N�mero do banco
            // 4        C�digo da Moeda - 9 para Real
            // 5        Digito verificador do C�digo de Barras
            // 6 a 19   Valor (12 inteiros e 2 decimais)
            // 20 a 44  Campo Livre definido por cada banco

            // 1. Campo - composto pelo c�digo do banco, c�digo da mo�da, as cinco primeiras posi��es
            // do campo livre e DV (modulo10) deste campo
            $p1 = substr($linha, 0, 4);
            $p2 = substr($linha, 19, 5);
            $p3 = BoletoController::modulo_10("$p1$p2");
            $p4 = "$p1$p2$p3";
            $p5 = substr($p4, 0, 5);
            $p6 = substr($p4, 5);
            $campo1 = "$p5.$p6";

            // 2. Campo - composto pelas posi�oes 6 a 15 do campo livre
            // e livre e DV (modulo10) deste campo
            $p1 = substr($linha, 24, 10);
            $p2 = BoletoController::modulo_10($p1);
            $p3 = "$p1$p2";
            $p4 = substr($p3, 0, 5);
            $p5 = substr($p3, 5);
            $campo2 = "$p4.$p5";

            // 3. Campo composto pelas posicoes 16 a 25 do campo livre
            // e livre e DV (modulo10) deste campo
            $p1 = substr($linha, 34, 10);
            $p2 = BoletoController::modulo_10($p1);
            $p3 = "$p1$p2";
            $p4 = substr($p3, 0, 5);
            $p5 = substr($p3, 5);
            $campo3 = "$p4.$p5";

            // 4. Campo - digito verificador do codigo de barras
            $campo4 = substr($linha, 4, 1);

            // 5. Campo composto pelo valor nominal pelo valor nominal do documento, sem
            // indicacao de zeros a esquerda e sem edicao (sem ponto e virgula). Quando se
            // tratar de valor zerado, a representacao deve ser 000 (tres zeros).
            $campo5 = substr($linha, 5, 14);

            return "$campo1 $campo2 $campo3 $campo4 $campo5"; 
        }

        public function geraCodigoBanco($numero) {
            $parte1 = substr($numero, 0, 3);
            $parte2 = BoletoController::modulo_11($parte1);
            return $parte1 . "-" . $parte2;
        }

}
