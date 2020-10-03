<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensoValue extends Model
{
    protected $fillable = [
        'timestamp', 'name', 'value'
    ];
}
