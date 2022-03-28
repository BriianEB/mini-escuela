<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model {

    public function materia() {
        return $this->belongsTo(Materia::class);
    }

    public function grupo() {
        return $this->belongsTo(Grupo::class);
    }

    public function profesor() {
        return $this->belongsTo(Profesor::class);
    }
}
