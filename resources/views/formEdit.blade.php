@extends('layouts.template')

@section('title', 'Actualizar')

@section('content')

<div class="container-flud px-4 px-lg-5">
    <form method="POST" action="{{ url('clientList/'. $client->id) }}">
        @method('PUT')
        @csrf
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{$client->nombre}}" placeholder="Nombre" />
                    <label class="form-label" for="nombre">Nombre</label>
                </div>
            </div>
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="apellido" name="apellido" class="form-control" value="{{$client->apellido}}" placeholder="Apellido" />
                    <label class="form-label" for="apellido">Apellido</label>
                </div>
            </div>
        </div>
    
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="company" name="company" class="form-control" value="{{$client->company}}" placeholder="Compañia" />
            <label class="form-label" for="company">Compañia</label>
        </div>
    
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{$client->ciudad}}" placeholder="Ciudad" />
                    <label class="form-label" for="ciudad">Ciudad</label>
                </div>
            </div>
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="text" id="pais" name="pais" class="form-control" value="{{$client->pais}}" placeholder="País" />
                    <label class="form-label" for="pais">País</label>
                </div>
            </div>
        </div>
    
        <!-- Text input -->
    
        <div class="row mb-4">
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="number" id="telefono1" name="telefono1" class="form-control" value="{{$client->telefono1}}"
                        placeholder="Teléfono 1" />
                    <label class="form-label" for="telefono1">Teléfono 1</label>
                </div>
            </div>
            <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <input type="number" id="telefono2" name="telefono2" value="{{$client->telefono2}}" class="form-control"
                        placeholder="Teléfono 2" />
                    <label class="form-label" for="telefono2">Teléfono 2</label>
                </div>
            </div>
        </div>
    
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" value="{{$client->email}}"
                placeholder="Email (correo electrónico)" />
            <label class="form-label" for="email">Email</label>
        </div>
    
        <!-- Number input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="website" name="website" class="form-control" value="{{$client->website}}" placeholder="Website (URL)" />
            <label class="form-label" for="website">Website</label>
        </div>
        <!-- Submit button -->
        <div class="d-md-flex justify-content-md-end gap-3 mt-3">
            <div class="d-md-flex gap-3 mt-3">
                <a href="{{ url('clientList') }}" class="btn btn-light">
                    Volver
                </a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>

@endsection