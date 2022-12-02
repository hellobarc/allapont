<?php

namespace App\Http\Controllers;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $usuario = Auth::user();        
        return view('user/perfil', ['usuario' => $usuario]);
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
        //$user_id = auth()->user()->id;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(){
        //
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//////las funciones para editar perfil de usuario

    public function update_email(Request $request)
    {
      $this->validate($request, [
         'email' => ['required','string', 'email', 'max:255', 'unique:users'],
      ]);


      $email = $request->input('email');
      Auth::user()->email = $email;
      Auth::user()->save();
      $usuario = Auth::user();
      return redirect()->back()->with('alert', 'Datos actualizados correctamente.');
      return view('user/perfil', ['usuario' => $usuario]);
      
    }




    public function update_name(Request $request)
    {

      $this->validate($request, [
         'name' => ['required','string', 'max:255'],
      ]);

      $name = $request->input('name');
      Auth::user()->name = $name;
      Auth::user()->save();
      $usuario = Auth::user();
      return redirect()->back()->with('alert', 'Datos actualizados correctamente.');
      return view('user/perfil', ['usuario' => $usuario]);
    }



    public function update_celular(Request $request)
    {

      $this->validate($request, [
         'celular' => ['required','string', 'max:255'],
      ]);

      $celular = $request->input('celular');
      Auth::user()->celular = $celular;
      Auth::user()->save();
      $usuario = Auth::user();
      return redirect()->back()->with('alert', 'Datos actualizados correctamente.');
      return view('user/perfil', ['usuario' => $usuario]);
    }


////FUNCIONES PARA CAMBIAR CONTRASEÑA
    public function edit_password(Request $request)
    {
      $usuario = Auth::user();
      $request->validate(
        [
          'current_password' => ['required', new MatchOldPassword],
          'new_password' => ['required', 'min:8'],
          'new_confirm_password' => ['required', 'same:new_password', 'min:8'],
        ],

        [
          'current_password.required'      => 'Introduce tu contraseña actual para poder modificarla.',
          'new_password.required'          => 'Debes introducir una nueva contraseña.',
          'new_password.min'               => 'La contraseña debe contener como minino 8 caracteres.',
          'new_confirm_password.required'  => 'Debes validar la nueva contraseña.',          
          'new_confirm_password.same'      => 'La nueva contraseña y su confirmación deben coincidir.',
          'new_confirm_password.min'       => 'La contraseña debe contener como minino 8 caracteres.',
        ]
      );
      User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
      
      /*Estos te devueven la vista*/
      return redirect()->back()->with('alert', 'Contraseña actualizada correctamente.');
      return view('user/perfil', ['usuario' => $usuario]);        
    }


    public function update_imagen(Request $request){



      if ($request->hasFile('avatar')) {
          $foto = $request->file('avatar');
          $filename = time().'.'.$foto->getClientOriginalExtension();
          //$avatar = $request->file('avatar')->storeAs('users/avatars', $filename, 'public');///cambiando el public
          $foto->move(public_path().'/users/avatars/',$filename);
          $user = Auth::user();
          $user->avatar = 'users/avatars/'.$filename;
          $user->save();
      }

      /*
      if ($request->hasFile('avatar')) {
          $foto = $request->file('avatar');
          $filename = time().'.'.$foto->getClientOriginalExtension();
          $avatar = $request->file('avatar')->storeAs('uploads/avatars', $filename, 'public');
          $user = Auth::user();
          $user->avatar = $avatar;
          $user->save();
      }
      */

      $usuario = Auth::user();
      return redirect()->back()->with('alert', 'Foto de perfil actualizada correctamente.');
      

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
