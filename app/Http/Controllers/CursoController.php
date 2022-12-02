<?php

namespace App\Http\Controllers;
use App\Curso;
use Auth;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        //$cursos = Curso::paginate('10');
        return view('admin/usuarios', compact('users'));
    }


    public function create(Request $request)
    {
        /*Primero obtenermos el array de los n nombres de los instructores*/
        $a = $request->instructor;

        $names = array_column($a, 'name');
        
        //print_r($names);

        /*luego almacenamos las fotos y obtenemos el array de sus nombres */

        if(isset($_FILES['instructor'])){
            $name_array = $_FILES['instructor']['name'];
            $tmp_name_array = $_FILES['instructor']['tmp_name'];
            $type_array = $_FILES['instructor']['type'];
            $size_array = $_FILES['instructor']['size'];
            $error_array = $_FILES['instructor']['error'];

            $fotos = [];
            for($i=0;$i < count($tmp_name_array);$i++) {
                $temp = implode(",", $tmp_name_array[$i]);
                $nam = implode(",", $name_array[$i]);

                $filename = time().'.'.$nam;

                /*PARA EL LOCALHOST*/
                move_uploaded_file($temp, public_path('\courses\instructores\ins_').$filename);
                
                /*PARA EL HOSTING*/
                //move_uploaded_file($temp, public_path('courses/instructores/ins_').$filename);


                $fotos[] = 'ins_'.$filename;        
            }
        }


       
        /*Se deben combinar los dos arrays para poder almacenarlos en la DB*/

        $combine = array_map(null, $names, $fotos);

        //Esta linea es para guardar la imagen que se sube//
        
        if ($request->hasFile('avatar')) {
            $foto = $request->file('avatar');
            $filename = time().'.'.$foto->getClientOriginalExtension();
            $curso['avatar'] = $request->file('avatar')->storeAs('courses/avatars', $filename, 'public');
        }     
        
        $array_curso = array(
		    "name" => request()->name,
		    "url" => request()->url,
            "avatar" => $curso['avatar'],
            "descripcion" => request()->descripcion,
		    "time"=> request()->time,
            "acceso" => request()->acceso,
            "precio"=> request()->precio,
            "contenido"=> json_encode(request()->contenido),
            "instructor" => json_encode($combine),
		);

        Curso::insert($array_curso);
        
        return redirect()->back()->with('alert', 'Curso creado con exito');
        return view('admin/crear_curso');

///////
        
        /*Primero obtenermos el array de los n nombres de los instructores*/
        /*
        $a = $request->instructor;

        $names = array_column($a, 'name');
        */
        
        //print_r($names);

        /*luego almacenamos las fotos y obtenemos el array de sus nombres */
        /*
        if(isset($_FILES['instructor'])){
            $name_array = $_FILES['instructor']['name'];
            $tmp_name_array = $_FILES['instructor']['tmp_name'];
            $type_array = $_FILES['instructor']['type'];
            $size_array = $_FILES['instructor']['size'];
            $error_array = $_FILES['instructor']['error'];

            $fotos = [];
            for($i=0;$i < count($tmp_name_array);$i++) {
                $temp = implode(",", $tmp_name_array[$i]);
                $nam = implode(",", $name_array[$i]);

                move_uploaded_file($temp, storage_path('\app\public\uploads\postulantes\cursos\instructores\ins_').$nam);

                $fotos[] = 'ins_'.$nam;        
            }
        }
        */
        
       //print_r($fotos);

        /*Se deben combinar los dos arrays para poder almacenarlos en la DB*/
        /*
        $combine = array_map(null, $names, $fotos);
        */
        //Esta linea es para guardar la imagen que se sube//

        /*
        if ($request->hasFile('avatar')) {
            $curso['avatar'] = $request->file('avatar')->store('uploads/postulantes/cursos', 'public');
        }       

        $array_curso = array(
		    "name" => request()->name,
		    "url" => request()->url,
            "avatar" => $curso['avatar'],
            "descripcion" => request()->descripcion,
		    "time"=> request()->time,
            "acceso" => request()->acceso,
            "precio"=> request()->precio,
            "contenido"=> json_encode(request()->contenido),
            "instructor" => json_encode($combine),
		);

        Curso::insert($array_curso);
        
        return redirect()->back() ->with('alert', 'Curso creado con exito');
        return view('admin/crear_curso');

        */

    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        $cursos = \DB::table('cursos')->select('id','name','url','avatar')->get();
        return view('admin.ver_curso', ['cursos' => $cursos]);

    }


    public function public_show()
    {
        $cursos = \DB::table('cursos')->select('id', 'name','url','avatar', 'time','acceso')->get();

        return view('cursos/cursos', ['cursos' => $cursos]);

    }


    public function edit(Curso $curso)
    {
        //dd($curso->id);
        return view('admin/edit_curso', compact('curso'));


    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect('admin/ver_curso');
    }


    public function CursosUser()
    {
        $user_id = Auth::id();
        $cursos  = \DB::table('matriculas')
        ->join('cursos', 'cursos.id', '=', 'matriculas.curso_id')
        ->where('user_id', '=', $user_id)
        ->where('status', '=', 'Acceso autorizado')
        ->get();
        return view('user/cursos', ['cursos' => $cursos]);
    }


    #Metodo de prueba
    public function ajax()
    {
        $user_id = Auth::id();

        $response = Http::post('http://example.com/users', [
            'name' => 'Steve',
            'role' => 'Network Administrator',
        ]);
    }

}
