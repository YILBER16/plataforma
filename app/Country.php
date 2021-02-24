<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id', 'name', 'status'
    ];
    public function state()
    {
        return $this->hasMany(State::class);
    }
    public function estudiantes()
    {
        return $this->hasMany(Estudiantes::class,'id','id');
    }
}
