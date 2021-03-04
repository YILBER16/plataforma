<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensualidades extends Model
{
    use HasFactory;
    protected $table = "mensualidades";

    protected $fillable = [
        'id_mensualidad',
        'tipo_mensualidad',
        'valor',
      
    ];
    protected $primaryKey='id_mensualidad';
    public function grados()
    {
        return $this->hasMany(Grados::class,'id_mensualidad','id_mensualidad');
    }
}
