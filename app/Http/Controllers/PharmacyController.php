<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    private function get_datatable_data()
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

        return compact('items', 'title', 'create_route', 'show_route', 'columns');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pharmacies.index', $this->get_datatable_data());
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


        $pharmacy = new Pharmacy();

        $pharmacy->state = $request->state;
        $pharmacy->city = $request->city;
        $pharmacy->postal_code = $request->postal_code;
        $pharmacy->address = $request->address;
        $pharmacy->email = $request->email;
        $pharmacy->phone_number = $request->phone_number;

        $pharmacy->save();

        return redirect()->route('pharmacies.show', $pharmacy)->with('success', 'Farmacia creada');
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
