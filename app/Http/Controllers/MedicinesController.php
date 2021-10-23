<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicines;

class MedicinesController extends Controller
{
    
    public function index(){
        $medicines = Medicines::all();
        return view('medicamento.index',[
            'medicines' => $medicines,
        ]);
    }

    public function create(){
        return view('medicamento.create');
    }

    public function store(){
        $medicina = new Medicines();

        $medicina->name= request('name');
        $medicina->principal_component= request('principal_component');
        $medicina->monodrug= request('monodrug');
        $medicina->content= request('content');
        $medicina->unit= request('unit');
        $medicina->therapeutic_action= request('therapeutic_action');


        $medicina->save();



        return redirect('/medicinas')->with('mssg', 'Medicina agregada');
    }

    public function show($id){
        $medicina = Medicines::findOrFail($id);

        return view('medicamento.show', ['medicina' => $medicina]);
    }

    public function destroy($id){
        $medicina = Medicines::findOrFail($id);
        $medicina->delete();

        return redirect('/medicinas');
    }
}
