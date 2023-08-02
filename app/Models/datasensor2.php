<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasensor2 extends Model
{
    use HasFactory;
    protected $table='datasensor2';
    protected $fillable = [
        'id',
        'ph_tanah',
        'temperature',
        'nilai_stanah',
        'nilai_lembab',

    ];
    public $timestamps = true;

}
