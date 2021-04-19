<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Matriculas extends Model
{
    use HasFactory;
    protected $table = "matriculas";
    use SoftDeletes;

    protected $fillable = [
        'id_matricula',
        'id_estudiante',
        'id_grado',
        'id_anio_lectivo',
        'id_acudiente',
        'id_padre',
        'id_madre',
        'valor_matricula',
        'seguro_estudiantil',
        'descuento_mensualidad',
        'saldo_favor',
        'doc_foto',
        'doc_documento',
        'doc_paz_salvo',
        'doc_boletin',
        'doc_otros',
    ];
    protected $primaryKey='id_matricula';
    public function estudiante()
    {
        return $this->hasOne(Estudiantes::class,'id_estudiante','id_estudiante');
    }
    public function acudiente()
    {
        return $this->hasOne(Acudientes::class,'id_acudiente','id_acudiente');
    }
    public function padre()
    {
        return $this->hasOne(Padres::class,'id_padre','id_padre');
    }
    public function madre()
    {
        return $this->hasOne(Padres::class,'id_padre','id_madre');
    }
    public function grado()
    {
        return $this->hasOne(Grados::class,'id_grado','id_grado');
    }
    public function pagos()
    {
        return $this->hasMany(Pagos::class,'id_matricula','id_matricula');
    }
}
