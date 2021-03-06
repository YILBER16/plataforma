<?php

namespace App\Models;
use App\Country;
use App\State;
use App\City;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiantes extends Model
{
    use HasFactory;
    public $timestamps = true;
    use SoftDeletes;
    protected $table = "estudiantes";

    protected $fillable = [
        'id_estudiante',
        'tipo_documento',
        'nom_estudiante',
        'dir_estudiante',
        'tel_estudiante',
        'cor_estudiante',
        'fecha_nacimiento',
        'fecha_expedicion',
        'id_pais',
        'id_departamento',
        'id_ciudad',
        'sexo',
        'estado',
        'doc_simat',
        'doc_vacinacion',
        'doc_salud',
        'doc_otros',

    ];
    protected $primaryKey='id_estudiante';
    protected $dates= ['delete_at'];
    public function pais()
    {
        return $this->hasOne(Country::class,'id','id_pais');
    }
    public function departamento()
    {
        return $this->hasOne(State::class,'id','id_departamento');
    }
    public function ciudad()
    {
        return $this->hasOne(City::class,'id','id_ciudad');
    }
    public function matricula()
    {
        return $this->hasOne(Matriculas::class,'id_estudiante','id_estudiante');
    }
}
