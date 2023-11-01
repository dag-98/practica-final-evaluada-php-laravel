@extends('layouts.app')
@section('contents')
    <div class="container-sm">
        <br>
        <br>
        <h1 style="text-align: center">Información de Proyecto</h1>

        <form >
           
            <div class="mb-3">
                <label for="nombre_proyecto" class="form-label">Nombre del Proyecto</label>
                <input type="text" class="form-control" id="nombre_proyecto" name="NombreProyecto" value="{{$proyecto->NombreProyecto }}" readonly>
            </div>
            <div class="mb-3">
                <label for="fuente_fondos" class="form-label">Fuente de Fondos</label>
                <input type="text" class="form-control" id="fuente_fondos" name="fuenteFondos" value="{{$proyecto->fuenteFondos }}" readonly>
            </div>
            <div class="mb-3">
                <label for="monto_planificado" class="form-label">Monto Planificado</label>
                <input type="number" class="form-control" id="monto_planificado" name="MontoPlanificado" value="{{$proyecto->MontoPlanificado }}" step="0.01"
                readonly>
            </div>
            <div class="mb-3">
                <label for="monto_patrocinado" class="form-label">Monto Patrocinado</label>
                <input type="number" class="form-control" id="monto_patrocinado" name="MontoPatrocinado" value="{{$proyecto->MontoPatrocinado }}" step="0.01"
                readonly>
            </div>
            <div class="mb-3">
                <label for="monto_fondos_propios" class="form-label">Monto Fondos Propios</label>
                <input type="number" class="form-control" id="monto_fondos_propios" name="MontoFondosPropios" value="{{$proyecto->MontoFondosPropios }}"
                    step="0.01" readonly>
            </div>
            <a href="{{ route('proyectos.index') }}" class="btn btn-success">Regresar</a>
        </form>
    </div>
@endsection
