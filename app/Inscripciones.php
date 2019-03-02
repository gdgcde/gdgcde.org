<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripciones extends Model
{
    protected  $table =  'inscripciones';

    protected $guarded= ['_token', 'salir' ]; // every field to protect
}
