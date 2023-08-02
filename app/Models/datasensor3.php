<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasensor3 extends Model
{
    use HasFactory;
    protected $table='datasensor3';
    protected $fillable = [
        'id',
        'ph_tanah',
        'temperature',
        'nilai_stanah',
        'nilai_lembab',
        'created_at',
    ];

}
