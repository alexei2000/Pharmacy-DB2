<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pharmacy::all();
        $title = 'Farmacias';
        $create_route = 'pharmacies.create';
        $show_route = 'pharmacies.show';
        $columns = [
            ['title' => 'Estado', 'key' => 'state'],
            ['title' => 'Ciudad', 'key' => 'city'],
            ['title' => 'Código Postal', 'key' => 'postal_code'],
            ['title' => 'Número de teléfono', 'key' => 'phone_number'],
            ['title' => 'Correo electrónico', 'key' => 'email'],
        ];

        return view(
            'pages.pharmacies.index',
            compact('items', 'title', 'create_route', 'show_route', 'columns')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pharmacies.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pharmacy = Pharmacy::find($id);
        return view('pages.pharmacies.show', compact('pharmacy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pharmacy::destroy($id);

        return redirect()->route('pharmacies.index')->with("success", "Farmacia eliminada correctamente.");
    }
}
