@extends('layouts.principal')

@section('title', 'Proyectos')

@section('content_header')
    <h1 style="text-align: center">Gestión de Proyectos</h1>
@stop

@section('content_body')
    <div class="col-sm-12">
        <a href="{{ route('units.create') }}"
            class="btn btn-primary rounded-pill d-block d-sm-inline-block align-self-sm-center">
            <i class="fas fa-user-friends"></i> Agregar Unidad
        </a>
    </div>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table">
                <thead class="table-dark" scope="col">#</thead>
                <thead class="table-dark">Nombre Proyecto</thead>
                <thead class="table-dark">Fuente Fondos </thead>
                <thead class="table-dark">Monto Planificado</thead>
                <thead class="table-dark">Monto Patrocinado</thead>
                <thead class="table-dark">Monto Fondos Propios</thead>
                
                <th>Opciones</th>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                        <tr>
                            <td>{{ $proyecto->id }}</td>
                            <td>{{ $proyecto->NombreProyecto }}</td>
                            <td>{{ $proyecto->fuenteFondos }}</td>
                            <td>{{ $proyecto->MontoPlanificado }}</td>
                            <td>{{ $proyecto->MontoPatrocinado }}</td>
                            <td>{{ $proyecto->MontoFondosPropios }}</td>
                            
                            <td>
                                <a href="{{ route('proyectos.show', $proyecto) }}">
                                    <button class="btn btn-xs btn-outline-success mx-1 shadow" title="Editar">
                                        <i class="far fa-lg fa-fw fa-eye"></i>
                                    </button>
                                </a>
                                <a href="{{ route('proyectos.edit', $proyecto) }}">
                                    <button class="btn btn-xs btn-outline-primary mx-1 shadow" title="Editar">
                                        <i class="far fa-lg fa-fw fa-edit"></i>
                                    </button>
                                </a>
                               
                                <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <a href="" style="color: inherit;">
                                        <button type="submit" class="btn btn-xs btn-outline-danger mx-1 shadow" title="Eliminar"
                                            onclick="return confirm('¿Estás seguro de que deseas eliminar este Proyecto?')">
                                            <i class="far fa-lg fa-fw fa-trash-alt"></i>
                                        </button>
                                    </a>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
          
    </div>
    <br>
    <br>
@stop


@section('js')

@stop
