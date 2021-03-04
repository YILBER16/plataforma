<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;
    protected $table = "pagos";

    protected $fillable = [
        'id_pago',
        'id_matricula',
        'id_mes',
        'valor_pago',
        'saldo',
        'estado',
    ];
    protected $primaryKey='id_pago';
    public function matricula()
    {
        return $this->hasOne(Matriculas::class,'id_matricula','id_matricula');
    }
    public function mes()
    {
        return $this->hasOne(Meses::class,'id_mes','id_mes');
    }
    public function abonos()
    {
        return $this->hasMany(Abonos::class,'id','id');
    }
}
