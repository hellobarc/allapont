<?php

namespace App\Providers;

use App\TesisUser;
use Facade\FlareClient\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        //para enviar el boton a los clientes de tesis
        //Comentar antes de correr la migración de tesis_users_table
        //view()->share('tesisUsers', \DB::table('tesis_users')->select('user_id')->get());
    }
}
