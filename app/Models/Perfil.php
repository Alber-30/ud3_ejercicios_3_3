<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = ['alumno_id', 'biografia'];

    protected $table = 'perfiles'; // Especificar el nombre correcto de la tabla

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
