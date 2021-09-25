<!--
// Mostrar lista de empleados :D //
-->
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Empleados</h3>
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




                    <a href="{{ url('empleado/create') }}" class="btn btn-success"> Registrar Nuevo empleado</a>
                    <br>
                    <br>

                    <table class="table table-light">

                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>1er nombre</th>
                                <th>2do nombre</th>
                                <th>1er apellido</th>
                                <th>2do apellido</th>
                                <th>Genero</th>
                                <th>Nro Celular</th>
                                <th>Direccion</th>
                                <th>Foto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>{{ $empleado->nombre1 }}</td>
                                <td>{{ $empleado->nombre2 }}</td>
                                <td>{{ $empleado->apellido1 }}</td>
                                <td>{{ $empleado->apellido2 }}</td>
                                <td>{{ $empleado->genero }}</td>
                                <td>{{ $empleado->nro_celular }}</td>                                
                                <td>{{ $empleado->direccion }}</td>
                       
                           
                                <td>
                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="200" alt="">

                                    <!--  {{ $empleado->Foto }} -->
                                </td>
                           
                                <td>

                                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                                        Editar
                                    </a>


                                    <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
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