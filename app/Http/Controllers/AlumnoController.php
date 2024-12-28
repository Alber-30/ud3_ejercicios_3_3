<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return Alumno::all();
    }

    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'email' => 'required|email|unique:alumnos',
    ]);

    return Alumno::create($request->all());
}

    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);

        $request->validate([
            'nombre' => 'sometimes|string',
            'apellido' => 'sometimes|string',
            'email' => 'sometimes|email|unique:alumnos,email,' . $alumno->id,
        ]);

        $alumno->update($request->all());
        return $alumno;
    }

    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return response()->json(['message' => 'Alumno eliminado'], 200);
    }
}
