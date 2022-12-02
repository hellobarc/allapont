<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    protected $cast = [
        'req_files ' => 'array',
        'ent_files' => 'array',
    ];

}
