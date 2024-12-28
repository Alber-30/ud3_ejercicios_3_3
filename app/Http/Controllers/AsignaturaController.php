<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        return Asignatura::all();
    }

    public function show($id)
    {
        return Asignatura::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        return Asignatura::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);

        $request->validate([
            'nombre' => 'sometimes|string',
            'descripcion' => 'sometimes|string',
        ]);

        $asignatura->update($request->all());
        return $asignatura;
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete();
        return response()->json(['message' => 'Asignatura eliminada'], 200);
    }
}
