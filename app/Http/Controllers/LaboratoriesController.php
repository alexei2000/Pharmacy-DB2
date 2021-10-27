<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratory;
class LaboratoriesController extends Controller
{
    //
    public function index(){
        $laboratorios = Laboratory::all();
        return view('laboratories.index',[
            'laboratorios' => $laboratorios,
        ]);
    }

    public function show($id){
        $laboratorio = Laboratory::findOrFail($id);

        return view('laboratories.show', ['laboratorio' => $laboratorio]);
    }

    public function create(){
        return view('laboratories.create');
    }

    public function store(){
        $laboratorio = new Laboratory();

        $laboratorio->name = request('name');
        $laboratorio->address = request('address');
        $laboratorio->email = request('email');
        $laboratorio->phone_number = request('phone_number');

        $laboratorio->save();

        return redirect('/laboratorios')->with('mssg', 'nueva medicina creada');
    }

    public function destroy($id){
        $laboratorio = Laboratory::findOrFail($id);
        $laboratorio->delete();

        return redirect('/laboratorios');
    }
}
