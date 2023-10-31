<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
   
    public function index()
    {
        $proyecto = Proyecto::all();
        return view('index')->with('listaProyectos', $proyecto);
    }

    
    public function create()
    {
        return view('crear');
    }

    
    public function store(Request $formdata)
    {
        $nuevoProyecto = new Proyecto;
        $nuevoProyecto->NombreProyecto = $formdata->input('NombreProyecto');
        $nuevoProyecto->fuenteFondos = $formdata->input('fuenteFondos');
        $nuevoProyecto->MontoPlanificado = $formdata->input('MontoPlanificado');
        $nuevoProyecto->MontoPatrocinado = $formdata->input('MontoPatrocinado');
        $nuevoProyecto->MontoFondosPropios = $formdata->input('MontoFondosPropios');
        $nuevoProyecto->save();
        return redirect()->route('index');
    }

   
    public function show( $id)
    {
        $p_seleccionado = Proyecto::find($id);
        return view('mostrar')->with('proyecto', $p_seleccionado);
    }

    
    public function edit($id)
    {
        $p_seleccionado = Proyecto::find($id);
        return view('editar')->with('proyecto', $p_seleccionado);
    }

   
    public function update(Request $formdata, $id)
    {
        $p_actualizado = Proyecto::find($id);
        $p_actualizado->NombreProyecto = $formdata->input('NombreProyecto');
        $p_actualizado->fuenteFondos = $formdata->input('fuenteFondos');
        $p_actualizado->MontoPlanificado = $formdata->input('MontoPlanificado');
        $p_actualizado->MontoPatrocinado = $formdata->input('MontoPatrocinado');
        $p_actualizado->MontoFondosPropios = $formdata->input('MontoFondosPropios');
        $p_actualizado->save();
        return redirect()->route('home');
    }

   
    public function destroy($id)
    {
        $p_seleccionado = Proyecto::find($id);
        $p_seleccionado->delete();
        return redirect()->route('home');
    }
}
