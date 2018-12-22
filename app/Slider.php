<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded= ['_token', 'salir' ]; // every field to protect
}
