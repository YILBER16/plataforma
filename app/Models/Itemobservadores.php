<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemobservadores extends Model
{
    use HasFactory;
    protected $table = "item_observadores";

    protected $fillable = [
        'id',
        'categoria_falta',
        'tipo_falta',
    ];
    protected $primaryKey='id';
    public function categoriafalta()
    {
        return $this->hasOne(Categoriaitemobservador::class,'id','categoria_falta');
    }
    public function observadores()
    {
        return $this->hasMany(Observadores::class,'id','id');
    }
}

