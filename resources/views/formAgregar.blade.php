@extends('layouts.template')

@section('title', 'Agregar')

@section('content')

    <section>
        <form method="POST" action="{{ route('clientList.store') }}">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" />
                        <label class="form-label" for="nombre">Nombre</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" />
                        <label class="form-label" for="apellido">Apellido</label>
                    </div>
                </div>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="company" name="company" class="form-control" placeholder="Compañia" />
                <label class="form-label" for="company">Compañia</label>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad" />
                        <label class="form-label" for="ciudad">Ciudad</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="pais" name="pais" class="form-control" placeholder="País" />
                        <label class="form-label" for="pais">País</label>
                    </div>
                </div>
            </div>

            <!-- Text input -->

            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="telefono1" name="telefono1" class="form-control"
                            placeholder="Teléfono 1" />
                        <label class="form-label" for="telefono1">Teléfono 1</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="telefono2" name="telefono2" class="form-control"
                            placeholder="Teléfono 2" />
                        <label class="form-label" for="telefono2">Teléfono 2</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control"
                    placeholder="Email (correo electrónico)" />
                <label class="form-label" for="email">Email</label>
            </div>

            <!-- Number input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="website" id="website" name="website" class="form-control" placeholder="Website (URL)" />
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
    </section>

@endsection
