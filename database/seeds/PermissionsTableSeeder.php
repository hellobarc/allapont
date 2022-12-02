<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Usuarios
        Permission::create([
        	'name'  	  => 'Listar Usuarios',
        	'slug' 		  => 'users.index',//Esto sería el index
        	'description' => 'Lista todos los usuarios del sistema',
        ]);


        Permission::create([
        	'name'  	  => 'Ver Usuarios',
        	'slug' 		  => 'users.show',
        	'description' => 'Ver todos los usuarios del sistema',
        ]);


        Permission::create([
        	'name'  	  => 'Editar Usuarios',
        	'slug' 		  => 'users.edit',
        	'description' => 'Editar datos de todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name'  	  => 'Eliminar Usuarios',
        	'slug' 		  => 'users.destroy',
        	'description' => 'Eliminar usuarios del sistema',
        ]);


        //Roles
        Permission::create([
            'name'        => 'Listar roles',
            'slug'        => 'roles.index',//Esto sería el index
            'description' => 'Lista todos los roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver roles',
            'slug'        => 'roles.show',
            'description' => 'Ver todos los roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver roles',
            'slug'        => 'roles.create',
            'description' => 'Ver todos los roles del sistema',
        ]);


        Permission::create([
            'name'        => 'Editar roles',
            'slug'        => 'roles.edit',
            'description' => 'Editar datos de todos los roles del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar roles',
            'slug'        => 'roles.destroy',
            'description' => 'Eliminar roles del sistema',
        ]);

        //Roles
        Permission::create([
            'name'        => 'Listar productos',
            'slug'        => 'productos.index',//Esto sería el index
            'description' => 'Lista todos los productos del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver productos',
            'slug'        => 'productos.show',
            'description' => 'Ver todos los productos del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver productos',
            'slug'        => 'productos.create',
            'description' => 'Ver todos los productos del sistema',
        ]);


        Permission::create([
            'name'        => 'Editar productos',
            'slug'        => 'productos.edit',
            'description' => 'Editar datos de todos los productos del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar productos',
            'slug'        => 'productos.destroy',
            'description' => 'Eliminar productos del sistema',
        ]);

    }
}
