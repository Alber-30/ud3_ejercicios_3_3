<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'email'];

    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'alumno_asignatura');
    }

    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }

    public function posts()
{
    return $this->hasMany(Post::class);
}
}


