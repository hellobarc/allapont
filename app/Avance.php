<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{

    protected $fillable = ['avance_id','estado','visible','tesis_id','req_coment','vacio','req_files','vacio','req_dia','vacio','req_mes','req_agno','req_hora','req_date','ent_coment','ent_files','ent_date','aporte','user_id','title','comentary','files','date_of_delivery','post_session'];

    protected $cast = [
        'req_files ' => 'array',
        'ent_files' => 'array',
    ];

}

