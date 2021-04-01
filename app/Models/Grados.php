<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grados extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "grados";

    protected $fillable = [
        'id_grado',
        'nom_grado',
        'jornada',
        'id_mensualidad',
    ];
    protected $primaryKey='id_grado';
    public function mensualidad()
    {
        return $this->hasOne(Mensualidades::class,'id_mensualidad','id_mensualidad');
    }
    public function matriculas()
    {
        return $this->hasMany(Matriculas::class,'id_grado','id_grado');
    }
}
