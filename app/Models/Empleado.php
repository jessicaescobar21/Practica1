<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public function tiendas() {
        return $this->hasMany(Tienda::class, 'FK_idJefe', 'idJefe');
    }

    public function historiales() {
        return $this->hasMany(Historial::class, 'FK_idJefe', 'idJefe');
    }

}
