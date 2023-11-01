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

    
    public function store(Request $request)
    {

        $nuevoProyecto = Proyecto::create([
            'NombreProyecto' => $request->get('NombreProyecto'),
            'fuenteFondos' => $request->get('fuenteFondos'),
            'MontoPlanificado' => $request->get('MontoPlanificado'),
            'MontoPatrocinado' => $request->get('MontoPatrocinado'),
            'MontoFondosPropios' => $request->get('MontoFondosPropios')
        ]);
        return redirect()->route('index');
    }

   
    public function show(Proyecto $p)
    {
        
        return view('mostrar')->with('proyecto', $p);
    }

    
    public function edit(Proyecto $p)
    {
        
        return view('editar')->with('proyecto', $p);
    }

   
    public function update(Request $request, Proyecto $p)
    {
        $p->NombreProyecto= $request->get('NombreProyecto');
        $p->fuenteFondos= $request->get('fuenteFondos');
        $p->MontoPlanificado= $request->get('MontoPlanificado');
        $p->MontoPatrocinado= $request->get('MontoPatrocinado');
        $p->MontoFondosPropios= $request->get('MontoFondosPropios');
        $p->save();
        return redirect()->route('home');
    }

   
    public function destroy(Proyecto $p)
    {
        $p->delete();
        return redirect()->route('home')->with('success', 'Unidad eliminada correctamente.');
    }
}
