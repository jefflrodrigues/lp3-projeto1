<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::orderBy('created_at', 'desc')->paginate(10);       
        return view('contato.index', ['contatos' => $contatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contato/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato = new Contato();
        $contato->fill($request->all());
        $contato->save();

        $request->session()->flash('success', 'Cadastro realizado com sucesso!');
        return redirect('contato');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato, $id)
    {
        $contato = Contato::findOrFail($id);
        return view('contato.edit', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contato $contato, $id)
    {        
        $contato = Contato::findOrFail($id);
        $contato->fill($request->all());
        $contato->save();

        $request->session()->flash('success', 'Cadastro editado com sucesso!');
        return redirect('contato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();
        $request->session()->flash('success', 'Cadastro deletado com sucesso!');
        return redirect('contato');
    }
}
