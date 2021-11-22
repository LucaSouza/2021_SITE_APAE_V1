<?php

namespace App\Http\Controllers;

use App\Models\Transparencia;
use Illuminate\Http\Request;

class TransparenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function balanco()
    {
        $balancos = Transparencia::where([
            ['tipo', '=', '1'],
            ['ativo', '=', '1'],
        ])->get();

        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Balanços | aqui você visualiza todos nossos balanços', 'APAE DE NOVA ANDRADINA');    

        return view('paginas.04_transparencia_balancos')->with('balancos',$balancos)
                                                        ->with('compartilhamento',$dados_compartilhamento);
    }

    public function documentos()
    {
        $documentos = Transparencia::where([
            ['tipo', '=', '2'],
            ['ativo', '=', '1'],
        ])->get();
        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Documentos | aqui você visualiza todos nossas documentações', 'Apae de Nova Andradina');

        return view('paginas.05_transparencia_documentos')->with('documentos',$documentos)
                                                          ->with('compartilhamento',$dados_compartilhamento);
    }

    public function parceiros()
    {   
        $parcerias = Transparencia::where([
            ['tipo', '=', '3'],
            ['ativo', '=', '1'],
        ])->get();
        
        $compartilhamento = new SiteController;
        $dados_compartilhamento = $compartilhamento->compartilhamento_geral('Parceiros | aqui você visualiza todos nossos balanços', 'Apae de Nova Andradina','logo-apaena.jpg');

        return view('paginas.06_transparencia_parceiros')->with('parcerias',$parcerias)
                                                         ->with('compartilhamento',$dados_compartilhamento);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function show(Transparencia $transparencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Transparencia $transparencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transparencia $transparencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transparencia $transparencia)
    {
        //
    }
}
