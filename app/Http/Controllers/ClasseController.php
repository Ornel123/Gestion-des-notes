<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Http\Requests\StoreClasseRequest;
use App\Http\Requests\UpdateClasseRequest;
use App\Models\Filiere;
use App\Models\Niveau;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();
        $niveaux = Niveau::all();
        $classes = Classe::all();
        foreach($classes as $classe){
            $classe->filiere = $classe->filiere();
        }
        return view("recuperation.classe", compact(["classes", "filieres", "niveaux"]));
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
     * @param  \App\Http\Requests\StoreClasseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClasseRequest $request)
    {
        $request->validate([
            'code' => 'sometimes|string|between:3,8|unique:classes,code',
            'intitule' => 'sometimes|string',
            'filiere_id' => 'sometimes|interger|exists:filieres,id'
            'niveau_id' => 'sometimes|interger|exists:niveaux,id'
        ]);

        if($request->code){
            Classe::create($request->only([
                'code',
                'filiere_id',
                'intitule',
                'niveau_id'
            ]));
        }

        return redirect('/classe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClasseRequest  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClasseRequest $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        //
    }
}
