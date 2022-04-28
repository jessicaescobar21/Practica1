<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    protected $table = "historiales";

    public function empleados() {
        return $this->belongsTo(Empleado::class, 'FK_idJefe', 'idJefe');
    }
    
    public function tiendas() {
        return $this->belongsTo(Tienda::class, 'FK_idTienda', 'idTienda');
    }
}
