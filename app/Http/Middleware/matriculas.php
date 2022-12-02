<?php

namespace App\Http\Middleware;

use Closure;

use Auth;
use App\Matricula;
use App\User;

class matriculas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //Debes selecionar el URL del curso de la vista
        $subject = $request->getPathInfo();
        $search = '/cursos/' ;
        $curso_url = str_replace($search, '', $subject) ;

        //Esto seleciona el ide del usuario en linea
        $user_id = Auth::id();

        //Esto seleciona el id del ususario y del curso
        $matriculas = \DB::table('matriculas')->where('user_id', '=', $user_id)->where('curso_url', "=", $curso_url)->where('status', '=','Acceso autorizado')->get();


        if(count($matriculas) == 0) {
            return redirect()->back()->with('alert', 'Debes estar matriculado para acceder al curso.');
        }else{
            return $next($request);
        }
        
    }
}
