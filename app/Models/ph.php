<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ph extends Model
{
    use HasFactory;
    protected $table='ph';
    protected $fillable = [
        'id',
        'nilai_ph',
        
    ];

    public function tbsensor()
    {
        return $this->hasMany(Tbsensor::class, 'ph_id', 'id');
    }
}
