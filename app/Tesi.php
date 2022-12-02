<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesi extends Model
{
    public function getRouteKeyName()
    {
        return 'id';
    }
}
