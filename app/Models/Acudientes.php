<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Acudientes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "acudientes";

    protected $fillable = [
        
        'id_acudiente',
        'tipo_documento',
        'nom_acudiente',
        'dir_acudiente',
        'tel_acudiente',
        'cor_acudiente',
        'doc_documento',
    ];
    protected $primaryKey='id_acudiente';
    protected $dates= ['delete_at'];
    public function matriculas()
    {
        return $this->hasMany(Matriculas::class,'id_acudiente','id_acudiente');
    }
}
