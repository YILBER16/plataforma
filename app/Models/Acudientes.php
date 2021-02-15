<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class Acudientes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "acudientes";

    protected $fillable = [
        'id_acudiente',
        'nom_acudiente',
        'dir_acudiente',
        'tel_acudiente',
        'cor_acudiente',
        'doc_documento',
    ];
    protected $primaryKey='id_acudiente';
    protected $dates= ['delete_at'];

}
