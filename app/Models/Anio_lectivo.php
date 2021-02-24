<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anio_lectivo extends Model
{
    use HasFactory;
    protected $table = "anio_lectivo";

    protected $fillable = [
        'id_anio_lectivo',
        'nom_anio_lectivo',
        'fecha_inicio',
        'fecha_fin',
        'estado',

    ];
    protected $primaryKey='id_anio_lectivo';

}
