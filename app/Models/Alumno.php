<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

    public function grupo() {
        return $this->belongsTo(Grupo::class);
    }
}
