<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meses extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "meses";

    protected $fillable = [
        'id_mes',
        'nom_mes',
        'id_anio_lectivo',
        'estado',
      
    ];
    protected $primaryKey='id_mes';
    public function pagos()
    {
        return $this->hasMany(Pagos::class,'id_pago','id_pago');
    }
}
