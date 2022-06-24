<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use Illuminate\Http\Request;
use App\Models\Entidade;
use App\Models\Item;

class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coletas = Coleta::all();
        return view('coletas.index', ['coletas' => $coletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::orderBy('id')->get();
        $entidades = Entidade::orderBy('nome')->get();
        return view('coletas.create', ['items' => $items, 'entidades' => $entidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Coleta::create($request->all())) {
            return redirect()->route('coletas')->with('success', 'Coleta cadastrada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao cadastrar coleta!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        return view('coletas.show', ['coleta' => $coleta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta)
    {
        $items = Item::orderBy('id')->get();
        $entidades = Entidade::orderBy('nome')->get();
        return view('coletas.edit', ['coleta' => $coleta, 'items' => $items, 'entidades' => $entidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coleta $coleta)
    {
        $coleta->fill($request->all());
        if ($coleta->save()) {
            return redirect()->route('coletas')->with('success', 'Coleta atualizada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao atualizar coleta!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta)
    {
        if ($coleta->delete()) {
            return redirect()->route('coletas')->with('success', 'Coleta excluída com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao excluir coleta!');
        }
    }
    public function relatorioEntidade()
    {
        $totalColetas = array();
        $quantidade = 0;
        $entidades = Entidade::orderBy('nome')->get();
        foreach ($entidades as $entidade) {
            $coletas = Coleta::where('entidade_id', $entidade->id)->get();
            foreach ($coletas as $coleta) {
                $quantidade += $coleta->quantidade;
            }
            array_push($totalColetas, $quantidade);
            $quantidade = 0;
        }

        $result = 0;

        foreach ($totalColetas as $total) {
            $result += $total;
        }

        return view('coletas.relatorioent', ['entidades' => $entidades, 'totalColetas' => $totalColetas, 'result' => $result]);
    }

    public function relatorioItem()
    {
        $totalColetas = array();
        $quantidade = 0;
        $items = Item::orderBy('descricao')->get();
        foreach ($items as $item) {
            $coletas = Coleta::where('item_id', $item->id)->get();
            foreach ($coletas as $coleta) {
                $quantidade += $coleta->quantidade;
            }
            array_push($totalColetas, $quantidade);
            $quantidade = 0;
        }

        $result = 0;

        foreach ($totalColetas as $total) {
            $result += $total;
        }

        return view('coletas.relatorioitem', ['items' => $items, 'totalColetas' => $totalColetas, 'result' => $result]);
    }
}
