<?php

namespace App\Http\Controllers;

use App\Postulantes;
use Illuminate\Http\Request;

class PostulantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postulantes = \DB::table('postulantes')->select('id','Nombre','Correo', 'Celular', 'Comentario','Curriculum')->get();
        return view('admin.postulantes', ['postulantes' => $postulantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$datosPostulante = request()->all();
        return response()->json($datosPostulante);*/
        $datosPostulante = request()->except('_token');
        if ($request->hasFile('curriculum')) {
            $datosPostulante['curriculum'] = $request->file('curriculum')->store('uploads/postulantes', 'public');
        }
        Postulantes::insert($datosPostulante);
        //return response()->json($datosPostulante);
        
        //echo'<script type="text/javascript">
        //alert("Datos recibidos. ¡Nos podremos en contacto contigo!");
        //</script>';
        //return view('carrera');
        return redirect()->back() ->with('alert', 'Solicitud recibida. ¡Nos podremos en contacto contigo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function show(Postulantes $postulantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulantes $postulantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulantes $postulantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Postulantes::destroy($id);
        return redirect('admin/postulantes');
    }
}
