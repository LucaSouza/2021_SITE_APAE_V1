<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PagSeguro;

class PagSeguroController extends Controller
{
    public function action_boleto(request $r){

        $pagseguro = PagSeguro::setReference('0000001')
            ->setSenderInfo([
            'senderName' => 'JOAO DE LIMA PAES', //Deve conter nome e sobrenome
            'senderPhone' => '(32) 1324-1421', //Código de área enviado junto com o telefone
            'senderEmail' => 'joaolima@gmail.com',
            'senderHash' => $r->pagseguro_token,
            'senderCPF' => '44165643092' //Ou CNPJ se for Pessoa Júridica
            ])
            ->setItems([
            [
                'itemId' => '1',
                'itemDescription' => 'doacao_10',
                'itemAmount' => 10.00, //Valor unitário
                'itemQuantity' => '1', // Quantidade de itens
            ]
            ])
            ->send([
            'paymentMethod' => 'boleto'
            ]);

            dd($pagseguro);
    }
}
