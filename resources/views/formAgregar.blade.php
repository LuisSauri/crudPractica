@extends('layouts.template')

@section('title', 'Agregar')

@section('content')

    <section>
        <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form6Example1" class="form-control" placeholder="Nombre" />
                        <label class="form-label" for="form6Example1">Nombre</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form6Example2" class="form-control" placeholder="Apellido" />
                        <label class="form-label" for="form6Example2">Apellido</label>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form6Example1" class="form-control" placeholder="Ciudad" />
                        <label class="form-label" for="form6Example1">Ciudad</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form6Example2" class="form-control" placeholder="País" />
                        <label class="form-label" for="form6Example2">País</label>
                    </div>
                </div>
            </div>

            <!-- Text input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" placeholder="Compañia" />
                <label class="form-label" for="form6Example3">Compañia</label>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="form6Example1" class="form-control" placeholder="Teléfono 1" />
                        <label class="form-label" for="form6Example1">Teléfono 1</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="number" id="form6Example2" class="form-control" placeholder="Teléfono 2 (opcional)" />
                        <label class="form-label" for="form6Example2">Teléfono 2</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form6Example5" class="form-control" placeholder="Email (correo electrónico)" />
                <label class="form-label" for="form6Example5">Email</label>
            </div>

            <!-- Number input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="website" id="form6Example6" class="form-control" placeholder="Website (URL) (opcional)" />
                <label class="form-label" for="form6Example6">Website</label>
            </div>
            <!-- Submit button -->
            <div class="d-md-flex justify-content-md-end gap-3 mt-3">
                <div class="d-md-flex gap-3 mt-3">
                    <a href="{{ url('clientList') }}" class="btn btn-light">
                        Volver
                    </a>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </div>
        </form>
    </section>

@endsection
