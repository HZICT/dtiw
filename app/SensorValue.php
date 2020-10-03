<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorValue extends Model
{
    protected $fillable = [
        'timestamp', 'name', 'value'
    ];
}
