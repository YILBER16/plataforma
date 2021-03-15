<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observadores extends Model
{
    use HasFactory;
    protected $table = "observadores";

    protected $fillable = [
        'id',
        'id_estudiante',
        'id_item_observador',
        'descripcion_falta',
    ];
    protected $primaryKey='id';
    public function itemobservador()
    {
        return $this->hasOne(Itemobservadores::class,'id','id_item_observador');
    }
}
