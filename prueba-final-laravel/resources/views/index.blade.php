@section('title', 'Proyectos')
@extends('layouts.app')
    <div class="container mt-4">
        <h1>Lista de Proyectos</h1>

        <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear Nuevo Proyecto</a>

        <table class="table mt-4">
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
                            <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-info"
                                data-bs-toggle="modal" data-bs-target="#modalProyecto{{ $proyecto->id }}">Ver</a>
                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

