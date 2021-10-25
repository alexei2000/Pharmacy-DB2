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
        $pharmacies = Pharmacy::all();
        return view(
            'pages.pharmacies.index',
            [
                'title' => 'Farmacias',
                'items' => $pharmacies,
                'title' => 'Farmacias',
                'create_route' => 'pharmacies.create',
                'show_route' => 'pharmacies.show',
                'columns' => [
                    ['title' => '#', 'key' => 'id'],
                    ['title' => 'Estado', 'key' => 'state'],
                    ['title' => 'Ciudad', 'key' => 'city'],
                    ['title' => 'Código Postal', 'key' => 'postal_code'],
                    ['title' => 'Número de teléfono', 'key' => 'phone_number'],
                    ['title' => 'Correo electrónico', 'key' => 'email'],
                ],

            ]
        );
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
        return view('pages.pharmacies.show');
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
        //
    }
}
