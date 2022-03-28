<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model {

    public function alumnos() {
        return $this->hasMany(Alumno::class);
    }

    public function clases() {
        return $this->hasMany(Clase::class);
    }
}
