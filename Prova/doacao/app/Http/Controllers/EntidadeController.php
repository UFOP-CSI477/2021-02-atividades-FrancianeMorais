<?php

namespace App\Http\Controllers;

use App\Models\Entidade;
use Illuminate\Http\Request;

class EntidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidades= Entidade::orderBy('nome')->get();
       
         return view('entidades.index', ['entidades'=>$entidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Entidade::create($request->all())) {
            return redirect()->route('entidades')->with('success', 'Entidade cadastrada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao cadastrar entidade!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function show(Entidade $entidade)
    {
        return view('entidades.show', ['entidade' => $entidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidade $entidade)
    {
        return view('entidades.edit', ['entidade' => $entidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidade $entidade)
    {
        $entidade->fill($request->all());
        if ($entidade->save()) {
            return redirect()->route('entidades')->with('success', 'Entidade atualizada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao atualizar entidade!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidade $entidade)
    {
        if ($entidade->coletas->count() > 0) {
            return back()->withInput()->with('error-message', 'Entidade não pode ser excluída pois possui coletas!');
        } else if ($entidade->delete()) {
            return redirect()->route('entidades')->with('success', 'Entidade excluída com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao excluir entidade!');
        }
    }
}
