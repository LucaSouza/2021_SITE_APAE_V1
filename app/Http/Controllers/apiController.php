<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Guzzle\Exception\GuzzleException;

class apiController extends Controller
{
    public function token()
    {
        try {
            
            /*Criando um objeto cliente*/
            
            $guzzle = new Client([
                /*cabeçalho*/

                'headers' => [
                    'gw-dev-app-key' => config('apiCobranca.gw_dev_app_key'),
                    'Authorization' => config('apiCobranca.authorization'),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],

                /*Desativar SSL*/
                'verify' => false                   
            ]);
            $resposta = $guzzle->request('POST','https://oauth.hm.bb.com.br/oauth/token?gw-dev-app-key=d27b57790bffab301364e17d30050156b9d1a5ba',

            array(
                'form_params' => array(
                    'grant_type' => 'client_credentials',
                    'client_id' => config('apiCobranca.client_id'),
                    'client_secret' => config('apiCobranca.client_secret'),
                    'scope' => 'cobrancas.boletos-requisicao cobrancas.boletos-info',
                )
            ));

            $body = $resposta->getBody();

            $contents = $body->getContents();

            $token = json_decode($contents);

            return $token->access_token;


        } catch (GuzzleException $e) {
            dd('Error ao gerar boleto');
        }
    }

    public function registrar()
    {       /* Informações do Boleto */
            $body = array(  
                'numeroConvenio' => 3128557,
                'numeroCarteira' => 17,
                'numeroVariacaoCarteira' => 35,
                'codigoModalidade' => 1,
                'dataEmissao' => '12.05.2021',
                'dataVencimento' => '12.06.2021',
                'valorOriginal' => 123.50,
                'valorAbatimento' => 0,
                'quantidadeDiasProtesto' => 0,
                'indicadorNumeroDiasLimiteRecebimento' => 'N',
                'numeroDiasLimiteRecebimento' => 2,
                'codigoAceite' => 'A',
                'codigoTipoTitulo' => 4,
                'descricaoTipoTitulo' => 'DS',
                'indicadorPermissaoRecebimentoParcial' => 'N',
                'numeroTituloBeneficiario' => '123456',
                'campoUtilizacaoBeneficiario' => 'TESTE',
                'numeroTituloCliente' => '00031285570010970980',
                'mensagemBloquetoOcorrencia' => 'TESTE',
                'pagador' => array(
                    'tipoRegistro' => 1,
                    'numeroRegistro' => 97965940132,
                    'nome' => 'Odorico Paraguassu',
                    'endereco' => 'Avenida Dias Gomes 1970',
                    'cep' => 77458000,
                    'cidade' => 'Sucupira',
                    'bairro' => 'Centro',
                    'uf' => 'TO',
                ),
                'beneficiarioFinal' => array(
                    'tipoInscricao'=> 2,
                    'numeroInscricao'=> 98959112000179,
                    'nome'=> 'Dirceu Borboleta',
                    'quantidadeDiasNegativacao'=> 0,
                    'orgaoNegativador'=> 10,
                    'indicadorPix'=> 'N',
                ),
            );
    
            /* Converte array em json */
            $body = json_encode($body);
            
            try {
                $guzzle = new Client([
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->token(),
                        'Content-Type' => 'application/json',
                    ],
                    'verify' => false
                ]);
    
                                                        
                /* Requisição */
                $response = $guzzle->request('POST', 'https://api.hm.bb.com.br/cobrancas/v2/boletos?gw-dev-app-key='.config('apiCobranca.gw_dev_app_key'),
                    [
                        'body' => $body
                    ]
                );
    
                /* Recuperar o corpo da resposta da requisição */
                $body = $response->getBody();
    
                /* Acessar as dados da resposta - JSON */
                $contents = $body->getContents();
    
                /* Conveter o JSON em array associativo PHP */
                $boleto = json_decode($contents);
    
                dd($boleto);
    
            } catch (ClientException $e) {
               echo $e->getMessage();
            }
    }

    public function listar(){
        try {
            $guzzle = new Client([
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token(),
                    'Content-Type' => 'application/json',
                ],
                'verify' => false
            ]);

            /* Requisição */
            $response = $guzzle->request('GET', 'https://api.hm.bb.com.br/cobrancas/v2/boletos?gw-dev-app-key='. config('apiCobranca.gw_dev_app_key') .
                '&indicadorSituacao=' . 'B' .    
                '&agenciaBeneficiario=' . '452' .
                '&contaBeneficiario=' . '123873' .
                '&carteiraConvenio'. '17' .
                '&variacaoCarteiraConvenio'. '35' .
                '&indice=' . '300' .
                '&codigoEstadoTituloCobranca=' . '7' .
                '&dataInicioMovimento=' . '01.01.2021' .
                '&dataFimMovimento=' . '12.06.2021'
            );

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converter o JSON em array associativo do PHP */
            $boletos = json_decode($contents);

            dd($boletos);

        } catch (GuzzleException $e) {
            echo $e->getMessage();
        }
      
    }

    public function  consultar(){
        $id = '00031285579999990005';
        try {
            $guzzle = new Client([
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token(),
                    'Content-Type' => 'application/json',
                ],
                'verify' => false
            ]);

            /* Requisição */
            $response = $guzzle->request('GET', 'https://api.hm.bb.com.br/cobrancas/v2/boletos/'.
                $id .
                '?gw-dev-app-key=' . config('apiCobranca.gw_dev_app_key') .
                '&numeroConvenio=' .'3128557'
            );

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converter o JSON em array associativo do PHP */
            $boleto = json_decode($contents);

            dd($boleto);

        } catch (ClientException $e) {
            echo $e->getMessage();
        }
    }

    public function darBaixa(){
        
        $id = '00031285570000030001';

        try {
            $guzzle = new Client([
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token(),
                    'Content-Type' => 'application/json',
                ],
                'verify' => false
            ]);

            /* Requisição */
            $response = $guzzle->request('POST', 'https://api.hm.bb.com.br/cobrancas/v2/boletos/'. 
                $id . '/baixar?gw-dev-app-key=' . config('apiCobranca.gw_dev_app_key'),
                [
                    'body' => json_encode([
                        'numeroConvenio' => 3128557
                    ])
                ]
            );

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converter o JSON em array associativo do PHP */
            $boleto = json_decode($contents);

            dd($boleto);

        } catch (GuzzleException $e) {
            echo $e->getMessage();
        }
    }

    public function atualizar(){

        $id = '00031285579999990005';

        /* Atributos que serão alterados */
        $dados = array(
            'numeroConvenio' => 3128557,
            'indicadorNovaDataVencimento' => 'S',
            'alteracaoData' => array(
            'novaDataVencimento' => '15.06.2021'
            )
        );

        /* Converte array em json */
         $dados = json_encode($dados); 


        try {
            $guzzle = new Client([
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token(),
                    'Content-Type' => 'application/json',
                ],
                'verify' => false,
               
            ]);

            /* Requisição */
            $response = $guzzle->request('PATCH', 'https://api.hm.bb.com.br/cobrancas/v2/boletos/'.$id.'?gw-dev-app-key='. config('apiCobranca.gw_dev_app_key'),
                [
                    'body' => $dados,
                ]
            );

            /* Recuperar o corpo da resposta da requisição */
            $body = $response->getBody();

            /* Acessar as dados da resposta - JSON */
            $contents = $body->getContents();

            /* Converter o JSON em array associativo do PHP */
            $boleto = json_decode($contents);

            dd($boleto);

        } catch (GuzzleException $e) {
            echo $e->getMessage();
        } 
    }
}
