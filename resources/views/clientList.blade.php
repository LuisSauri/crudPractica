@extends('layouts.template')

@section('title', 'Crud')

@section('tabla')

<div class="container-flud px-4 px-lg-5">
    <div class="row">
        <div class="col-12">
            
    <table class="table table-bordered mt-4 mb-4">
        <thead class="table-dark">
          <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Apellido</th>
            <th class="text-center" scope="col">Compañia</th>
            <th class="text-center" scope="col">Ciudad</th>
            <th class="text-center" scope="col">País</th>
            <th class="text-center" scope="col">Teléfono 1</th>
            <th class="text-center" scope="col">Teléfono 2</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">Website</th>
            <th class="text-center" scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($listClients as $client)
            <tr>
                <td class="text-center">{{$client->id}}</td>
                <td class="text-center">{{$client->nombre}}</td>
                <td class="text-center">{{$client->apellido}}</td>
                <td class="text-center">{{$client->compañia}}</td>
                <td class="text-center">{{$client->ciudad}}</td>
                <td class="text-center">{{$client->pais}}</td>
                <td class="text-center">{{$client->telefono1}}</td>
                <td class="text-center">{{$client->telefono2}}</td>
                <td class="text-center">{{$client->email}}</td>
                <td class="text-center">{{$client->website}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
        </div>

    </div>
</div>

@endsection