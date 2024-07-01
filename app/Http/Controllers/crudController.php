<?php

namespace App\Http\Controllers;

use App\Models\crudList;
use Illuminate\Http\Request;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listClients = crudList::paginate(5);
        return view('clientList', compact('listClients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/formAgregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'company' => 'required',
            'ciudad' => 'required',
            'pais' => 'required',
            'telefono1' => 'required',
            'telefono2' => 'required',
            'email' => 'required',
            'website' => 'required'


        ]);
        $listClients = new crudList();
        $listClients->nombre = $request->input('nombre');
        $listClients->apellido = $request->input('apellido');
        $listClients->company = $request->input('company');
        $listClients->ciudad = $request->input('ciudad');
        $listClients->pais = $request->input('pais');
        $listClients->telefono1 = $request->input('telefono1');
        $listClients->telefono2 = $request->input('telefono2');
        $listClients->email = $request->input('email');
        $listClients->website = $request->input('website');

        $listClients->save();

        return redirect('/clientList');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = crudList::find($id);
        return view('/formEdit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'company' => 'required',
            'ciudad' => 'required',
            'pais' => 'required',
            'telefono1' => 'required',
            'telefono2' => 'required',
            'email' => 'required',
            'website' => 'required'


        ]);
        $client = crudList::find($id);
        $client->nombre = $request->input('nombre');
        $client->apellido = $request->input('apellido');
        $client->company = $request->input('company');
        $client->ciudad = $request->input('ciudad');
        $client->pais = $request->input('pais');
        $client->telefono1 = $request->input('telefono1');
        $client->telefono2 = $request->input('telefono2');
        $client->email = $request->input('email');
        $client->website = $request->input('website');

        $client->save();

        return redirect('/clientList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = crudList::find($id);

        $client->delete();

        return redirect('/clientList');
    }
}