@extends('layouts.app')
<div class="container mt-4">
    <h1>Editar Proyecto</h1>

    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="NombreProyecto" class="form-label">Nombre del Proyecto</label>
            <input type="text" class="form-control" id="NombreProyecto" name="NombreProyecto" value="{{ $proyecto->NombreProyecto }}">
        </div>

        <div class="mb-3">
            <label for="fuenteFondos" class="form-label">Fuente de Fondos</label>
            <input type="text" class="form-control" id="fuenteFondos" name="fuenteFondos" value="{{ $proyecto->fuenteFondos }}">
        </div>

        <div class="mb-3">
            <label for="MontoPlanificado" class="form-label">Monto Planificado</label>
            <input type="text" class="form-control" id="MontoPlanificado" name="MontoPlanificado" value="{{ $proyecto->MontoPlanificado }}">
        </div>

        <div class="mb-3">
            <label for="MontoPatrocinado" class="form-label">Monto Patrocinado</label>
            <input type="text" class="form-control" id="MontoPatrocinado" name="MontoPatrocinado" value="{{ $proyecto->MontoPatrocinado }}">
        </div>

        <div class="mb-3">
            <label for="MontoFondosPropios" class="form-label">Monto Fondos Propios</label>
            <input type="text" class="form-control" id="MontoFondosPropios" name="MontoFondosPropios" value="{{ $proyecto->MontoFondosPropios }}">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>