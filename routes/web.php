<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@home');

Route::get('tienda', function () {
    return view('tienda/tienda');
});

Route::get('publicaciones', function () {
    return view('publicaciones');
});

Route::get('muestra', function () {
    return view('muestra');
});

Route::get('repositorio', function () {
    return view('repositorio');
});

/*
Route::get('servicios/investigacion/psicologia', function () {
    return view('servicios/investigacion/psicologia');
});*/

Route::get('admin/product_create', function () {
    return view('admin/product_create');
})->middleware('can:users.index');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Usuarios perfil/////////////////////////////////////////////////////
Route::get('user/perfil', function () {
    return view('user/perfil');
});

//Controlador del EDITAR PERFIL////////////////////////////////////////////////////////////////////////////////////////////////////////
///1. Este código muestra los datos del usuario en la vista perfil.

Route::get('user/perfil', [
   'as' => 'user/perfil', 'uses' => 'UsuariosController@index'
])->middleware('auth');


Route::patch('user/perfil', 'UsuariosController@update_name')
    ->name('user.update');

Route::patch('user/email', 'UsuariosController@update_email')
    ->name('user.email');

Route::patch('user/celular', 'UsuariosController@update_celular')
    ->name('user.celular');


///CAMBIAR CONTRASEÑA DESDE PERFIL
Route::post('user/password', 'UsuariosController@edit_password')->name('change.password');
////////////////////////////////////////////////////////////////


//Cambiar foto de perfil//
Route::post('user/imagen', 'UsuariosController@update_imagen')->name('change.imagen');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7



//USER PAGOS////////////

Route::get('user/pagos', [
    'as' => 'user/pagos', 'uses' => 'MatriculaController@pagos'
])->middleware('auth');


////////////////////////////////

//USER CURSOS////////////
Route::get('user/cursos', [
    'as' => 'user/cursos', 'uses' => 'CursoController@CursosUser'
])->middleware('auth');
////////////////////////////////

//USER CERTIFICADOS////////////
Route::get('user/certificados', [
    'as' => 'user/certificados', 'uses' => 'CertificadoController@index'
])->middleware('auth');

////////////////////////////////





//Admin

//Admin/usuarios



Route::middleware(['auth'])->group(function(){
    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');

/////////////////////////////////////////////////////////////////////////////////
    //products
    Route::post('products/store', 'ProductController@store')->name('products.store')
        ->middleware('can:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
        ->middleware('can:products.index');

    Route::get('products/create', 'ProductController@create')->name('products.create')
        ->middleware('can:products.create');

    Route::put('products/{role}', 'ProductController@update')->name('products.update')
        ->middleware('can:products.edit');

    Route::get('products/{role}', 'ProductController@show')->name('products.show')
        ->middleware('can:products.show');

    Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
        ->middleware('can:products.destroy');

    Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
        ->middleware('can:products.edit');



/////////////////////////////////////////////////////////////////////////////////
    //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('can:users.create');

    /////
    Route::get('admin/usuarios', function () {
       return view('admin/usuarios');
    });
    Route::get('admin/usuarios', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');
    /////

    Route::put('users/{role}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');

    Route::get('users/{role}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');

    Route::delete('admin/usuarios/{id}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');
});





//Admin/Postulantes/////////////////////////////////////////////////////////////////////////////////////////7777

//Admin Postulantes
Route::get('admin/postulantes', [
   'as' => 'admin/postulantes', 'uses' => 'PostulantesController@index'
])->middleware('can:users.index');
/////////////////////////////////////////////////////////////////////////////////

////////Formulario de solicitud de trabajo/////////////////////
Route::get('carrera', function () {
    return view('carrera');
});

//Controlador del form
Route::post('postulante', [
   'as' => 'postulante', 'uses' => 'PostulantesController@store'
]);

//Borra entradas
Route::delete('admin/postulantes/{id}', 'PostulantesController@destroy')
    ->name('postulantes.destroy')->middleware('can:users.index');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Ver cursos publicos cliente////
Route::get('cursos', [
   'as' => 'cursos', 'uses' => 'CursoController@public_show'
]);
//////////////////////////////



////CURSOS ADMIN///////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

//CREAR cursos a nivel ADMIN////////////////////////////////////////////////
Route::get('admin/crear_curso', function () {
    return view('admin/crear_curso');
})->middleware('can:users.index');

Route::post('admin/crear_curso', [
   'as' => 'admin/crear_curso', 'uses' => 'CursoController@create'
])->middleware('can:users.index');

//Ver curso a nivel admin
Route::get('admin/ver_curso', function () {
    return view('admin/ver_curso');
})->middleware('can:users.index');

Route::get('admin/ver_curso', [
   'as' => 'admin/ver_curso', 'uses' => 'CursoController@show'
])->middleware('can:users.index');



//Eliminar curso nive superadmin LUCHO TU PAPA
Route::delete('admin/ver_curoso/{id}', 'CursoController@destroy')
    ->name('curso.destroy')->middleware('can:users.index');
////////////////////////////////////////////////////////////



//Editar cursos///
Route::get('admin/edit_curso/{curso}', 'CursoController@edit')
    ->name('admin/edit_curso');
////////////////////



/////MATRICULA CURSOS////
Route::get('cursos/matricula/{curso}', 'MatriculaController@index')
    ->name('cursos/matricula');

Route::post('matricula', [
        'as' => 'matricula', 'uses' => 'MatriculaController@create'
]);
//Compra cursos a nivel ADMIN - RELACIONADO CON LAS MATRICULAS////////////////////////////////////////////////


Route::get('admin/compras_cursos', [
    'as' => 'admin/compras_cursos', 'uses' => 'MatriculaController@show'
])->middleware('can:users.index');


///////////////////////////////
//VALIDAD MATRICULAS
Route::post('matricula_update/{id}', 'MatriculaController@update')
    ->name('matricula.update');
///




////CERTIFICADOS A NIVEL ADMIN////
///CREAR CERTIFICADOS///
Route::get('admin/certificados_create', [
    'as' => 'admin/certificados_create', 'uses' => 'CertificadoController@crearVer'
])->middleware('can:users.index');

Route::post('admin/certificados_create', [
    'as' => 'admin/certificados_create', 'uses' => 'CertificadoController@create'
])->middleware('can:users.index');

///VER CERTIFICADOS NIVEL ADMIN///
Route::get('admin/certificados_show', [
    'as' => 'admin/certificados_show', 'uses' => 'CertificadoController@show'
])->middleware('can:users.index');


//////////////////////////////////

///////////////////////////////////////////////////////////////





///////////////////////////////////////////////////////////////











//CURSOS - Hay que crear el Middelwere php artisan make:middleware url del curos
// Hay que configurar el midelwere para los accesos
//1. I Seminario Virtual En Derecho
//->middleware('matriculas'); //ESTO ES PARA LAS MATRICULAS
Route::get('cursos/ISeminarioVirtualEnDerecho', function () {
    return view('cursos/ISeminarioVirtualEnDerecho');
})->middleware('auth');

//2. II Seminario Virtual En Derecho
Route::get('cursos/IISeminarioVirtualEnDerecho', function () {
    return view('cursos/IISeminarioVirtualEnDerecho');
})->middleware('auth');

//3. Psicología Conductual: Aproximación historiográfica y conceptual a la enfermedad mental
Route::get('cursos/PsicologiaConductualAproximancion', function () {
    return view('cursos/PsicologiaConductualAproximancion');
})->middleware('auth');

//4. La violencia contra las mujeres durante el estado de emergencia nacional
Route::get('cursos/ViolenciaContraMujeresEstadoEmergencia', function () {
    return view('cursos/ViolenciaContraMujeresEstadoEmergencia');
})->middleware('auth');

//5. El delito de acoso: Un breve comentario
Route::get('cursos/DelitoAcoso', function () {
    return view('cursos/DelitoAcoso');
})->middleware('auth');

//6. El catastro urbano
Route::get('cursos/CatastroUrbano', function () {
    return view('cursos/CatastroUrbano');
})->middleware('auth');

//7.  Despido Arbitrario
Route::get('cursos/DespidoArbitrario', function () {
    return view('cursos/DespidoArbitrario');
})->middleware('auth');

//8. Manejando la depresión en tiempos de cuarentena
Route::get('cursos/DepresionCuarentena', function () {
    return view('cursos/DepresionCuarentena');
})->middleware('auth');

//9. Precedentes Administrativos 01 y 02-2020 del Tribunal del Servicio Civil
Route::get('cursos/PrecedentesAdministrativos', function () {
    return view('cursos/PrecedentesAdministrativos');
})->middleware('auth');



/////////////////////////////////////////////////////////////////////////////////

//ASESORIAS reuniones
Route::get('asesoria', function () {
    return view('cursos/asesoria');
})->middleware('can:users.index');

//ASESORIAS INVESTIGACIÓN - usuario informes
Route::get('asesoria/informe', function () {
    return view('asesoria/index');
});#->middleware('can:users.index');

//ASESORIAS INVESTIGACIÓN - usuario informes
/* Commented by Tarique
Route::get('asesoria/trabajo', function () {
    return view('asesoria/solicitud');
});#->middleware('can:users.index');
*/

//Tarique//

Route::get('asesoria/trabajo', 'TrabajoController@show_form')->middleware('auth')->name('asesoria.form_show');

Route::resource('asesoria/trabajo_manage','TrabajoController')->middleware('auth');

Route::post('asesoria/file_upload', 'TrabajoController@file_upload')->name('asesoria.file_upload');

//ASESORIAS INVESTIGACIÓN - usuario - Vista de requerimientos, con sistema de pago
Route::get('asesoria/requerimientos', function () {
    return view('asesoria/requerimientos');
});#->middleware('can:users.index');



///VISTA DE USUARIOS//
Route::get('asesoria/investigacion', [
    'as' => 'asesoria/investigacion', 'uses' => 'InveserviController@publicView'
]);

//TESIS////
Route::middleware(['auth'])->group(function(){

    Route::get('admin/tesis', function () {
        return view('admin/tesis/index');
    })->middleware('can:users.index');

    Route::get('admin/tesis/tesis_agregar', [
        'as' => 'admin/tesis/tesis_agregar', 'uses' => 'TesiController@show'
    ])->middleware('can:users.index');

    Route::post('admin/tesis/tesis_agregar', [
        'as' => 'admin/tesis/tesis_agregar', 'uses' => 'TesiController@create'
    ])->middleware('can:users.index');

    Route::get('admin/tesis/tesis_list', [
        'as' => 'admin/tesis/tesis_list', 'uses' => 'TesiController@listTesis'
    ])->middleware('can:users.index');

    Route::post('admin/tesis/tesis_asignarUser', [
        'as' => 'admin/tesis/tesis_asignarUser', 'uses' => 'TesiController@asignarUser'
    ])->middleware('can:users.index');

    Route::get('admin/tesis/tesis_cuotas', [
        'as' => 'admin/tesis/tesis_cuotas', 'uses' => 'TesiController@cuotasShow'
    ])->middleware('can:users.index');

    Route::get('admin/tesis/tesis_cuotas/{id}', [
        'as' => 'admin/tesis/tesis_cuotas', 'uses' => 'TesiController@usersTesis'
    ])->middleware('can:users.index');

    Route::post('admin/tesis/tesis_cuotasCrear', [
        'as' => 'admin/tesis/tesis_cuotasCrear', 'uses' => 'TesiController@cuotaCreate'
    ])->middleware('can:users.index');

    ###########################################################################################
    ##AVANCES---------------------------------------------------------------------------------#
    ###########################################################################################

    Route::get('admin/tesis/tesis_avances', [
        'as' => 'admin/tesis/tesis_avances', 'uses' => 'AvanceController@avancesShow'
    ])->middleware('can:users.index');

    Route::post('admin/tesis/tesis_avanceCrear', [
        'as' => 'admin/tesis/tesis_avanceCrear', 'uses' => 'AvanceController@create'
    ])->middleware('can:users.index');

    //Agregar avance///
    Route::get('admin/tesis/agregar_avance/{id}', 'AvanceController@agregar_avance')
    ->name('admin/tesis/agregar_avance')->middleware('can:users.index');

    Route::post('entregar_avance/{id}', 'AvanceController@entregar_avance')
    ->name('entregar.avance')->middleware('can:users.index');


    Route::get('chart', 'AvanceController@list')
    ->name('chart')->middleware('can:users.index');

    ###########################################################################################
    ##AVANCES-end-----------------------------------------------------------------------------#
    ###########################################################################################



    ###########################################################################################
    ##Servicios RUTAS-------------------------------------------------------------------------#
    ###########################################################################################


    Route::get('admin/tesis/add_servicios', [
        'as' => 'admin/tesis/add_servicios', 'uses' => 'InveserviController@admin'
    ])->middleware('can:users.index');

    Route::post('admin/investgacion_new_servicio', [
        'as' => 'admin/investgacion_new_servicio', 'uses' => 'InveserviController@create'
    ])->middleware('can:users.index');


});


Route::get('servicios/investigacion/{url}', [
    'as' => 'servicios/investigacion/', 'uses' => 'InveserviController@show'
]);

Route::post('user/new_comment', [
    'as' => 'user/new_comment', 'uses' => 'ServicomentController@create'
]);

/////////////////////////////////////////////////////////////////////////////////

//CUOTAS/////////////////////////////////////////////////////////////////////////
Route::middleware(['auth'])->group(function(){
    Route::get('cuota/{codigo_cuota}', [
        'as' => 'cuota', 'uses' => 'CuotaController@cuotasPay'
    ])->middleware('auth');
###################
//Hay que ponerle un middelwere que verifique que el usuario pertenezca a esa cuota.
//Usar la tesis *sugerencia
//Ver bien el modelo para actualizar
//2-1-21
#############


    ///////////////////////////////
    //ENVIAR VOUCHER DESDE EL USUARIO
    Route::post('cuota_update/{codigo_cuota}', 'CuotaController@update')
        ->name('cuota.update')->middleware('auth');
    ///
    ///////////////////////////////
    //VALIDAD VOUCHER DESDE EL ADMIN
    Route::post('cuota_validate/{codigo_cuota}', 'CuotaController@updateAdmin')
        ->name('cuota.validate')->middleware('can:users.index');
    ///
    ///////////////////////////////
    //EDITAR EL MONTO DE LA CUOTA DESDE EL ADMIN
    //RUTA PARA ABRIR LA VENTANA DE EDICIÓN
    Route::get('edit_cuota/{codigo_cuota}', 'CuotaController@editCuotaView')
    ->name('edit.cuota')->middleware('can:users.index');
    //RUTA PARA ENVIAR AL CONTROLADOR
    Route::post('update_cuota', 'CuotaController@editCuotaAdminUpdate')
    ->name('update.cuota')->middleware('can:users.index');
    ////////////////////////////////
});
/////////////////////////////////////////////////////////////////////////////////

//REUNION
Route::get('reunion', function () {
    return view('cursos/reunion');
});

///PSICOLOGIA//
Route::get('psicologia', function () {
    return view('psicologia/psicologia');
});

///PSICOLOGIA//
Route::get('test', function () {
    return view('psicologia/test');
});


///threejs//
Route::get('threejs', function () {
    return view('threejs');
});

///nft//
Route::get('nft', function () {
    return view('threejs');
});
Route::get('nft_dos', function () {
    return view('nft_dos');
});

Route::get('nft_tres', function () {
    return view('nft_tres');
});


Route::get('nft_cuatro', function () {
    return view('nft_cuatro');
});

///sunat_compras_rer//
Route::get('sunat_compras_rer', function () {
    return view('sunat_compras_rer');
});



/*
Route::get('psicologia', [
    'as' => 'psicologia/psicologia', 'uses' => 'AvanceController@req_plot'
])->middleware('can:users.index');
*/

///PSICOMETRIA//
Route::get('psicometria', [
    'as' => 'psicometria/datos', 'uses' => 'ProductController@data'
])->middleware('can:users.index');

Route::post('analisis', [
    'as' => 'analisis', 'uses' => 'ProductController@analisis'
])->middleware('can:users.index');



///MATEMÁTICAS
//ASESORIAS INVESTIGACIÓN - usuario informes
Route::get('matematicas', function () {
    return view('matematicas');
});#->middleware('can:users.index');




///RUTA DE PRUEBA PARA JALAR DATOS USANDO VANILLA JS
//ASESORIAS INVESTIGACIÓN - usuario informes/
/*Route::get('cursos', [
    'as' => 'cursos', 'uses' => 'CursoController@public_show'
 ]);*/

 Route::get('ajaxRequest', 'CursoController@ajax');
 //////////////////////////////




///VUE JS - ROUTES////
Route::get('/{vue?}', function () {
    return view('vue/index');
})->where('vue', '[\/\w\.-]*');

