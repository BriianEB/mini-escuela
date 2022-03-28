<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {

    public function clases() {
        return $this->hasMany(Clase::class);
    }
}
