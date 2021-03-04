<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Padres extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "padres";

    protected $fillable = [
        'id_padre',
        'nom_padre',
        'parentesco',
        'ocu_padre',
        'dir_padre',
        'tel_padre',
    ];
    protected $primaryKey='id_padre';
    protected $dates= ['delete_at'];
    public function matriculas()
    {
        return $this->hasMany(Matriculas::class,'id_padre','id_padre');
    }
    
}
