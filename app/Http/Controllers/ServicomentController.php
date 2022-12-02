<?php

namespace App\Http\Controllers;

use App\servicoment;
use Illuminate\Http\Request;

class ServicomentController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $request) 
    {
        $servicio = $request->get('serv');
        $comentario = $request->get('comentario');
        $nombre = $request->get('nombre');
        $correo = $request->get('correo');
        $telefono = $request->get('telefono');
        $recaptcha = $request->get('recaptcha');
        
        if ($recaptcha === null) {

            echo json_encode('error');

        } else {
            $array = array(
                "servi_name" => $servicio,
                "comentario" => $comentario,
                "nombre" => $nombre,
                "correo" => $correo,
                "telefono" => $telefono,
            );
    
            servicoment::insert($array);

            echo json_encode('bien');
        }

        /*
        echo json_encode(compact('a'));
        
        $request->validate([
            'g-recaptcha-response' => 'recaptcha',
        ]);*/
    }

    public function store(Request $request)
    {
        //
    }


    public function show(servicoment $servicoment)
    {
        //
    }


    public function edit(servicoment $servicoment)
    {
        //
    }


    public function update(Request $request, servicoment $servicoment)
    {
        //
    }


    public function destroy(servicoment $servicoment)
    {
        //
    }
}
