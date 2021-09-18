<!--
// Mostrar lista de empleados :D //
-->
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Administradores</h3>
                </div>
                <div class="card-body">




                    @if(Session::has('mensaje'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('mensaje') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    @endif

                    <a href="{{ url('auth/register') }}" class="btn btn-success"> Registrar Nuevo Administrador</a>
                    <br>
                    <br>

                    <table class="table table-light">

                        <thead class="thead-light">
                            <tr>
                                <th>#</th>

                                <th>Nombre</th>

                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>

                                <td>{{ $empleado->name }}</td>
                                <td>{{ $empleado->email }}</td>
                                <td>{{ $empleado->password }}</td>

                                <td>




                                    <form action="{{ url('/admin/'.$empleado->id) }}" class="d-inline" method="get">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿quieres borrar?')" value="Borrar">
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {!! $empleados->links() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection