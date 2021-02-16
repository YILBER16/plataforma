<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiantes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "estudiantes";

    protected $fillable = [
        'id_estudiante',
        'nom_estudiante',
        'dir_estudiante',
        'tel_estudiante',
        'cor_estudiante',
        'fecha_nacimiento',
        'fecha_expedicion',
        'pais',
        'ciudad',
        'sexo',

    ];
    protected $primaryKey='id_estudiante';
    protected $dates= ['delete_at'];
}
