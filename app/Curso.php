<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function getRouteKeyName()
    {
        return 'url';
    }

    protected $cast = [
        'contenido' => 'array',
        'instructor' => 'array'
    ];
}

