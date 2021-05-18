<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class egresosygastos extends Model
{
    use HasFactory;
    protected $table = "egresosygastos";

    protected $fillable = [
        'id',
        'fecha_salida',
        'clase_salida',
        'concepto_salida',
        'cc_pagado',
        'nom_pagado',
        'tipo_salida',
        'valor_salida',
        'descripcion_salida',
    ];
    protected $primaryKey='id';
}
