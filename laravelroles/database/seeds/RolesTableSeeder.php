<?php

use Illuminate\Database\Seeder;
use Ultraware\Roles\Models\Role;

class RolesTableSeeder extends Seeder{

    public function run(){
    	DB::table('roles')->delete();
    	$adminRole = Role::create([
			'name' => 'Admin',
			'slug' => 'admin',
			'description' => 'Este es rol de administrador', // optional
			'level' => 1, // optional, set to 1 by default
		]);

		$employeeRole = Role::create([
			'name' => 'Employee',
			'slug' => 'employee',
			'description' => 'Este es rol de empleado',
			'level' => 2
		]);

		$guestRole = Role::create([
			'name' => 'Guest',
			'slug' => 'guest',
			'description' => 'Este es un rol de invitado',
			'level' => 3
			]);
    }

}
