<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        return Nota::all();
    }

    public function show($id)
    {
        return Nota::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'nota' => 'required|numeric|min:0|max:10',
        ]);

        return Nota::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);

        $request->validate([
            'alumno_id' => 'sometimes|exists:alumnos,id',
            'asignatura_id' => 'sometimes|exists:asignaturas,id',
            'nota' => 'sometimes|numeric|min:0|max:10',
        ]);

        $nota->update($request->all());
        return $nota;
    }

    public function destroy($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();
        return response()->json(['message' => 'Nota eliminada'], 200);
    }
}
