@extends('layouts.app')
@section('contents')
    <div class="container-sm">
        <br>
        <br>
        <h1 style="text-align: center">Crear Nuevo Proyecto</h1>

        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre_proyecto" class="form-label">Nombre del Proyecto</label>
                <input type="text" class="form-control" id="nombre_proyecto" name="NombreProyecto" required>
            </div>
            <div class="mb-3">
                <label for="fuente_fondos" class="form-label">Fuente de Fondos</label>
                <input type="text" class="form-control" id="fuente_fondos" name="fuenteFondos" required>
            </div>
            <div class="mb-3">
                <label for="monto_planificado" class="form-label">Monto Planificado</label>
                <input type="number" class="form-control" id="monto_planificado" name="MontoPlanificado" step="0.01"
                    required>
            </div>
            <div class="mb-3">
                <label for="monto_patrocinado" class="form-label">Monto Patrocinado</label>
                <input type="number" class="form-control" id="monto_patrocinado" name="MontoPatrocinado" step="0.01"
                    required>
            </div>
            <div class="mb-3">
                <label for="monto_fondos_propios" class="form-label">Monto Fondos Propios</label>
                <input type="number" class="form-control" id="monto_fondos_propios" name="MontoFondosPropios"
                    step="0.01" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar Proyecto</button>
        </form>
    </div>
@endsection
