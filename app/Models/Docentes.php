<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Docentes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "docentes";

    protected $fillable = [
        'id_docente',
        'nom_docente',
        'dir_docente',
        'tel_docente',
        'cor_docente',
        'nivel_academico',
        'doc_documento',
        'hoja_de_vida',
    ];
    protected $primaryKey='id_docente';
    protected $dates= ['delete_at'];
    public function egresos()
    {
        return $this->hasMany(Egresos::class,'id','id');
    }
}
