<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonos extends Model
{
    use HasFactory;
    protected $table = "abonos";
    protected $fillable = [
        'id',
        'id_pago',
        'abono',
        'saldo',
    ];
    protected $primaryKey='id';
    public function pago()
    {
        return $this->hasOne(Pagos::class,'id_pago','id_pago');
    }
}
