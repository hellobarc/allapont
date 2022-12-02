<?php

namespace App\Http\Controllers;
use App\Curso;
use App\Matricula;
use Auth;

use Caffeinated\Shinobi\Models\Role;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{

    public function index(Curso $curso)
    {
        return view('cursos/matricula', compact('curso'));
    }


    public function create(Request $request)
    {

        //Esta linea es para guardar el voucher//
        if ($request->hasFile('voucher')) {
            $foto = $request->file('voucher');
            $filename = time().'.'.$foto->getClientOriginalExtension();
            $matricula['voucher'] = $request->file('voucher')->storeAs('courses/vouchers', $filename, 'public');
        }

        $array_matricula = array(
            "curso_id"     => request()->id_curso,
            "user_id"      => Auth::user()->id,
            "curso_name"   => request()->name,
            "curso_url"    => request()->curso_url,
            "user_name"    => Auth::user()->name,
            "curso_precio" => request()->precio,
            "voucher"      => $matricula['voucher'],
            "curso_avatar" => request()->avatar,
            "fecha"        => date("d/m/Y")
		);

        Matricula::insert($array_matricula);

        //Ahora se debe regresar la vista de pagos con las matriculas del usuario
        $user_id = Auth::id();
        $matriculas = \DB::table('matriculas')->where('user_id', '=', $user_id)->get();

        return redirect()->to('user/pagos'); 
    }


    public function show()
    {
        $matriculas = \DB::table('matriculas')->get();
        return view('admin/compras_cursos', ['matriculas' => $matriculas]);
    }

    public function pagos()
    {
        #ESTA FUNCIÓN DEVUELVE LAS CUOTAS
        //Ahora se debe regresar la vista de pagos con las matriculas del usuario
        $user_id = Auth::id();
        
        $matriculas = \DB::table('matriculas')->where('user_id', '=', $user_id)->get()->reverse();
        
        $tesis_user = \DB::table('tesis_users')->where('user_id', '=', $user_id)->get();
        
        #################################################################
        if ( count($tesis_user) != 0 ) {
            $cuotas = array();
            for ($i = 0; $i < count($tesis_user); $i++) {
                $cuotas[] = \DB::table('cuotas')
                            ->join('tesis', 'cuotas.tesis_id', '=', 'tesis.id')
                            ->where('tesis_id', '=', $tesis_user[$i]->tesis_id)->get();
            }
            //dd($cuotas);
            if ( count($cuotas) != 0 ) {
                return view('user/pagos', [
                    'matriculas' => $matriculas,
                    'cuotas' => $cuotas,
                ]);
            }else{
                return view('user/pagos', [
                    'matriculas' => $matriculas,
                ]);
            }
        }else{
            return view('user/pagos', [
                'matriculas' => $matriculas,
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        $matricula->status = $request->input('acceso');
        $matricula->monto_verif = $request->input('verificar');
        $matricula->save();
        return redirect()->back();
    }

}
