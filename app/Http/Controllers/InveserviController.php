<?php

namespace App\Http\Controllers;

use App\Inveservi;
use Illuminate\Http\Request;

class InveserviController extends Controller
{

    public function admin()
    {
        $inveservis = \DB::table('inveservis')->get();
        $servicoments = \DB::table('servicoments')->get();
        #dd($inveservis);
        return view('servicios/investigacion/admin')->with([
            'inveservis' => $inveservis,
            'servicoments' => $servicoments,
        ]);
    }


    public function create(Request $request)
    {   
        
        #Para almacenar la imagen carrousel
        if($request->HasFile('imagen_car')){
            $file = $request->file('imagen_car');
            $name_car = time().'car.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/img/servicios/',$name_car);
        } else {
            $name_car = 'vacio';
        }

        #Para almacenar la imagen inn
        if($request->HasFile('imagen_in')){
            $file = $request->file('imagen_in');
            $name_in = time().'in.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/img/servicios/',$name_in);
        } else {
            $name_in = 'vacio';
        }
        

        #Este bucle sirve para que cuando la variable se mande vacia no se muestre
        if ($request->sub_serv === null)
        {
            $sub_servicios = $request->sub_serv;
        }
        else 
        {
            $sub_servicios = array_values($request->sub_serv);#Esto sirve para reiniciar el key del array en caso de borrar una entrada en las variables y no se cuelgue el código.
        }

        $array_servicio = array(
            "url" => $request->url,
            "titulo" => $request->titulo,
            "texto" => $request->texto,
            "tipo" => $request->tipo,
            "imagen_car" => $name_car,
            "imagen_in" => $name_in,
            "sub_servicios" => json_encode($sub_servicios),
        );

        Inveservi::insert($array_servicio);

        return redirect()->back()->with('alert', 'Nuevo servicio creado correctamente.');
    }


    public function show($url)
    {
        $url_c  = \DB::table('inveservis')->where('url',  $url)->get();
        $url_c = json_decode($url_c, true);
        $url_c = array_values($url_c);
        return view('servicios/investigacion/servi', [
            'url' => $url_c,
        ]);
    }

    public function publicView()
    {
        #dd($servis);
        $servis  = \DB::table('inveservis')->get();
        #dd($servis);
        return view('asesoria/user_view', [
            'servis' => $servis,
        ]);
    }


    public function edit(Inveservi $inveservi)
    {
        //
    }


    public function update(Request $request, Inveservi $inveservi)
    {
        //
    }

    public function destroy(Inveservi $inveservi)
    {
        //
    }
}
