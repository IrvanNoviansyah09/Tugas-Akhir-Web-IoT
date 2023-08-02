<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbsensor extends Model
{
    use HasFactory;
    protected $table='tbsensor';
    protected $fillable = [
        'id',
        'ph_id',
        'kelembaban',
        'suhu_udara',
        'suhu_tanah',
        'created_at',
    ];

    public function ph()
    {
        return $this->belongsTo(Ph::class, 'ph_id', 'id');
    }
}
