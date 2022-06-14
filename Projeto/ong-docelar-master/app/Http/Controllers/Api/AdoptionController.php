<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Adoption::all();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adoption = Adoption::create([
            'animal_type' => $request->input('animal_type'),
            'animal_name' => $request->input('animal_name'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);

        return $adoption;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function show(Adoption $adoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function edit(Adoption $adoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adoption $adoption)
    {
        Adoption::find($request->route('id'))
            ->update([
                'animal_type' => $request->input('animal_type'),
                'animal_name' => $request->input('animal_name'),
                'image' => $request->input('image'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
            ]);

        return Adoption::find($request->route('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Adoption $adoption)
    {
        Adoption::find($request->route('id'))
            ->delete();

        return true;
    }
}
