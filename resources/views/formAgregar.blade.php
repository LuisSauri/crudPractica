@extends('layouts.template')

@section('title', 'Agregar')

@section('content')

    <section>
        <form method="POST" action="{{ url('/formAgregar') }}">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-floating">
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"
                            oninput="checkForm()" />
                        <label class="form-label" for="nombre">Nombre</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-floating">
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido"
                            oninput="checkForm()" />
                        <label class="form-label" for="apellido">Apellido</label>
                    </div>
                </div>
            </div>


            <div data-mdb-input-init class="form-floating mb-4">
                <input type="text" id="company" name="company" class="form-control" placeholder="Compañia"
                    oninput="checkForm()" />
                <label class="form-label" for="company">Compañia</label>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-floating">
                        <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad"
                            oninput="checkForm()" />
                        <label class="form-label" for="ciudad">Ciudad</label>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-floating">
                        <input type="text" id="pais" name="pais" class="form-control" placeholder="País"
                            oninput="checkForm()" />
                        <label class="form-label" for="pais">País</label>
                    </div>
                </div>
            </div>

            <!-- Teléfonos input -->
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-floating mb-4">
                        <input type="text" id="telefono1" name="telefono1" class="form-control" placeholder="Teléfono 1"
                            oninput="checkForm()" />
                        <label class="form-label" for="telefono1">Teléfono 1</label>
                        <div class="invalid-feedback" id="telefono1-error">El teléfono debe tener entre 10 y 12 dígitos
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="f orm-floating mb-4">
                        <input type="text" id="telefono2" name="telefono2" class="form-control" placeholder="Teléfono 2"
                            oninput="checkForm()" />
                        <label class="form-label" for="telefono2">Teléfono 2</label>
                        <div class="invalid-feedback" id="telefono2-error">El teléfono debe tener entre 10 y 12 dígitos
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-floating mb-4">
                <input type="email" id="email" name="email" class="form-control"
                    placeholder="Email (correo electrónico)" oninput="checkForm()" />
                <label class="form-label" for="email">Email</label>
                <div class="invalid-feedback" id="email-error">El correo no es válido</div>
            </div>

            <!-- Website input -->
            <div data-mdb-input-init class="form-floating mb-4">
                <input type="text" id="website" name="website" class="form-control" placeholder="Website (URL)"
                    oninput="checkForm()" />
                <label class="form-label" for="website">Website</label>
                <div class="invalid-feedback" id="website-error">La URL del sitio web no es válida</div>
            </div>
            <!-- Submit button -->
            <div class="d-md-flex justify-content-md-end gap-3 mt-3">
                <div class="d-md-flex gap-3 mt-3">
                    <a href="{{ url('clientList') }}" class="btn btn-light">
                        Volver
                    </a>
                    <script src="{{ asset('js/form.js') }}"></script>
                    <button type="submit" id="btnGuardar" class="btn btn-primary" disabled>Guardar</button>
                </div>
            </div>
        </form>
    </section>

@endsection
