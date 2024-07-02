@extends('layouts.template')

@section('title', 'Crud')
@section('content')
@endsection
<div class="content">
    <div class="row">
        <div class="col-11">
            <div class="col text-right mb-3">
                <a href="{{ url('formAgregar') }}" class="btn btn-info">
                    Agregar
                </a>
            </div>
            <div class="">
                <table class="table-responsive table-bordered mt-4 mb-4 border m-2">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Nombre</th>
                            <th class="text-center" scope="col">Apellido</th>
                            <th class="text-center" scope="col">Compañia</th>
                            <th class="text-center" scope="col">Ciudad</th>
                            <th class="text-center" scope="col">País</th>
                            <th class="text-center" scope="col" style="width: 200px;">Teléfono 1</th>
                            <th class="text-center" scope="col" style="width: 200px;">Teléfono 2</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Website</th>
                            <th class="text-center" scope="col" style="width: 200px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listClients as $client)
                            <tr>
                                <td class="text-center">{{ $client->id }}</td>
                                <td class="text-center">{{ $client->nombre }}</td>
                                <td class="text-center">{{ $client->apellido }}</td>
                                <td class="text-center">{{ $client->company }}</td>
                                <td class="text-center">{{ $client->ciudad }}</td>
                                <td class="text-center">{{ $client->pais }}</td>
                                <td class="text-center">{{ $client->telefono1 }}</td>
                                <td class="text-center">{{ $client->telefono2 }}</td>
                                <td class="text-center">{{ $client->email }}</td>
                                <td class="text-center">{{ $client->website }}</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-center">
                                        <a title="Actualizar"
                                            href="{{ url('clientList/' . $client->id . '/formEdit') }}"
                                            class="btn btn-small btn-warning me-2"><i class="bi bi-pen-fill"></i></a>

                                        <form action="{{ url('clientList/' . $client->id) }}" method="POST"
                                            onsubmit="return confirm('{{ __('¿Estás seguro de querer eliminar?') }}')">
                                            <button title="Eliminar" class="btn btn-small btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </div>
                                </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-center dark">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    {{ $listClients->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
