<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
   
    public function index()
    {
        $proyecto = Proyecto::all();
        return view('index')->with('proyectos', $proyecto);
    }

    
    public function create()
    {
        return view('crear');
    }

    
    public function store(Request $request)
    {

        $nuevo_proyecto = new Proyecto($request->all());
        $nuevo_proyecto->save();
        return redirect()->route('proyectos.index');
    }

   
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('consultar')->with('proyecto', $proyecto);
    }

    
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('editar')->with('proyecto', $proyecto);
    }

   
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());
        return redirect()->route('proyectos.index');
    }

   
    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Unidad eliminada correctamente.');
    }
}
