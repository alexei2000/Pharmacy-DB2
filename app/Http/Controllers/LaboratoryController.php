<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratories;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Laboratories $laboratory)
    {
        return view('laboratories.index', ["laboratorios" => $laboratory->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laboratories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratory = Laboratories::create($request->all());
        return redirect('/laboratorios')->with('mssg', 'nueva medicina creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratory = Laboratories::findOrFail($id);
        return view('laboratories.show', ['laboratorio' => $laboratory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratory = Laboratories::findOrFail($id);
        return view('laboratories.edit', ['laboratorio' => $laboratory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $laboratory = Laboratories::findOrFail($id);
        $laboratory->update($request->all());
        return  redirect('/laboratorios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laboratory = Laboratories::find($id);
        $laboratory->delete();
        return redirect('/laboratorios');
    }
}
