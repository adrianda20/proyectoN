<?php

namespace App\Http\Controllers\API;

use App\Models\Tarea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TareaController extends Controller
{

    public function index()
    {
        return Tarea::all();
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'estado' => 'required|in:completada,pendiente',
            'fecha_vencimiento' => 'required|date',
        ]);

        $tarea = Tarea::create($validated);
        return response()->json($tarea, 201);
    }


    public function show(Tarea $tarea)
    {
        return $tarea;
    }


    public function update(Request $request, Tarea $tarea)
    {
        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
            'estado' => 'sometimes|required|in:completada,pendiente',
            'fecha_vencimiento' => 'sometimes|required|date',
        ]);

        $tarea->update($validated);
        return response()->json($tarea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
