<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chenopodia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='chenopodia';
    protected $fillable = [
        'id',
        'nama',
        'ph',
        'kelembaban',
        'suhu_tanah',
        'suhu_udara',
        'created_at',

    ];
}
