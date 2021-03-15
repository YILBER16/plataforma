<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriaitemobservador extends Model
{
    use HasFactory;
    protected $table = "categoria_itemobservadores";

    protected $fillable = [
        'id',
        'categoria_falta',
    ];
    protected $primaryKey='id';
    public function itemobservador()
    {
        return $this->hasMany(Itemobservadores::class,'id','id');
    }
}
