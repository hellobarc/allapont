<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Certificado;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $certificados = \DB::table('certificados')->where('user_id', $user_id)->get();

        //dd($certificados_user);

        return view('user/certificados', ['certificados' => $certificados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function crearVer()
    {
        $usuarios = \DB::table('users')->get();

        $cursos = \DB::table('cursos')->get();


        return view('admin/certificados_create', ['usuarios' => $usuarios], ['cursos' => $cursos]);
    }


    public function create(Request $request)
    {
        
        if ($request->hasFile('certificado')) {
            $certificado = $request->file('certificado');
            $certificado_name = time().'.'.$certificado->getClientOriginalExtension();
            $certificadoDoc = $request->file('certificado')->storeAs('users/certificados', $certificado_name, 'public');
        }

        $id = request()->user_id;

        $usuario_data = \DB::table('users')->where('id', $id)->select('name')->get();

        $user = (array) $usuario_data[0];

        $userarray = array_values($user);

        $usuario = $userarray[0];

        $array_certificado = array(
		    "user_name" =>  $usuario,
		    "user_id" => request()->user_id,
            "curso_name" => request()->curso_name,
            "codigo" => request()->codigo,
		    "fecha"=> request()->fecha,
            "articulo"=> request()->articulo,
            "calidad" => request()->calidad,
            "certificado"=> $certificadoDoc,
        );

        Certificado::insert($array_certificado);

        return redirect()->back()->with('alert', 'Certificado creado correctamente.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $certificados = \DB::table('certificados')->get();
        return view('admin/certificados_show', ['certificados' => $certificados]);
    }


    public function showUser($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
