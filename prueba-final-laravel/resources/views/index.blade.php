@section('title', 'Proyectos')
@extends('layouts.app')
    <div class="container mt-4">
        <h1 style="text-align: center">Lista de Proyectos</h1>

        <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear Nuevo Proyecto</a>

        <table class="table table-striped table-hover mt-4" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Proyecto</th>
                    <th>Fuente de Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto Fondos Propios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->NombreProyecto }}</td>
                        <td>{{ $proyecto->fuenteFondos }}</td>
                        <td>${{ $proyecto->MontoPlanificado }}</td>
                        <td>${{ $proyecto->MontoPatrocinado }}</td>
                        <td>${{ $proyecto->MontoFondosPropios }}</td>
                        <td>
                            <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-secondary" style="width: 90px">Ver</a>
                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-success" style="width: 90px">Editar</a>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="width: 90px"
                                    onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

