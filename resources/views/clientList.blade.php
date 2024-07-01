@extends('layouts.template')

@section('title', 'Crud')

@section('content')

<div class="content">
  <div class="row">
      <div class="col-10">
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
                                          class="btn btn-small btn-warning me-2"><i class="bi bi-pen-fill"></i>
                                      </a>

                                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-id="{{ $client->id }}" data-bs-target="#exampleModal">
                                        <i class="bi bi-trash-fill"></i>
                                      </button>                               
                                  </div>
                              </td>
                      @endforeach
                      
                  </tbody>
              </table>
          </div>
      </div>

      <!-- Modal eliminar-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Registro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Estás seguro que deseas eliminar este registro?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('exampleModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget;
      var clientId = button.getAttribute('data-id');
      var form = deleteModal.querySelector('#deleteForm');
      form.action = '/clientList/' + clientId;
    });
  });
</script>

@endsection
