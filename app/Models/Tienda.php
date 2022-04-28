<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;
    public function empleados() {
        return $this->belongsTo(Empleado::class, 'FK_idJefe', 'idJefe');
    }

    public function historiales() {
        return $this->hasMany(Historial::class, 'FK_idTienda', 'idTienda');
    }
}
