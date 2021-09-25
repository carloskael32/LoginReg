<!--
formulario que tendra los datos en comun con create y edit
-->

<div class="container-fluid">



    <div class="row justify-content-center">



        <div class="col-md-8">
            <h1>{{ $modo }} Empleado</h1>

            @if(count($errors)>0)

            <div class="alert alert-danger" role="alert">
                <ul>

                    @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                    @endforeach

                </ul>
            </div>

            @endif

            <div class="form-group">
                <label for="nombre1">1er Nombre</label>
                <input type="text" class="form-control" name="nombre1" value="{{ isset($empleado->nombre1)?$empleado->nombre1:old('nombre1') }}" id="nombre1">
            </div>

            <div class="form-group">
                <label for="nombre2">2do Nombre</label>
                <input type="text" class="form-control" name="nombre2" value="{{ isset($empleado->nombre2)?$empleado->nombre2:old('nombre2') }}" id="nombre2">
            </div>

            <div class="form-group">
                <label for="apellido1">1er apellido</label>
                <input type="text" class="form-control" name="apellido1" value="{{ isset($empleado->apellido1)?$empleado->apellido1:old('apellido1') }}" id="apellido1">

            </div>

            <div class="form-group">
                <label for="apellido2">2do apellido</label>
                <input type="text" class="form-control" name="apellido2" value="{{ isset($empleado->apellido2)?$empleado->apellido2:old('apellido2') }}" id="apellido2">

            </div>

            <div class="form-group">
                <label for="genero">genero</label>
                <input type="text" class="form-control" name="genero" value="{{ isset($empleado->genero)?$empleado->genero:old('genero') }}" id="genero">

            </div>

            <div class="form-group">
                <label for="nro_celular">nro celular</label>
                <input type="number" class="form-control" name="nro_celular" value="{{ isset($empleado->nro_celular)?$empleado->nro_celular:old('nro_celular') }}" id="nro_celular">

            </div>

            <div class="form-group">
                <label for="direccion">direccion</label>
                <input type="text" class="form-control" name="direccion"  value="{{ isset($empleado->direccion)?$empleado->direccion:old('direccion') }}" id="direccion">

            </div>

            <div class="form-group">
                <label for="Nombre"></label>
                @if(isset($empleado->Foto))
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="200" alt="">
                @endif
                <input type="file" class="form-control" name="Foto" value="" id="Foto">

            </div>

            <input class="btn btn-success" type="submit" value="{{ $modo }} datos">


            <a class="btn btn-primary" href="{{ url('empleado/') }}"> Regresar</a>

        </div>
    </div>
</div>