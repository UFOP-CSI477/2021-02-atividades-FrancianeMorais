<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id')->get();
        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Item::create($request->all())) {
            return redirect()->route('items')->with('success', 'Entidade cadastrada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao cadastrar entidade!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->fill($request->all());
        if ($item->save()) {
            return redirect()->route('items')->with('success', 'Entidade atualizada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao atualizar entidade!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        
        if ($item->coletas->count() > 0) {
            return back()->withInput()->with('error-message', 'Entidade n??o pode ser exclu??da pois possui coletas!');
        } else if ($item->delete()) {
            return redirect()->route('items')->with('success', 'Entidade exclu??da com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao excluir entidade!');
        }
    }
}
