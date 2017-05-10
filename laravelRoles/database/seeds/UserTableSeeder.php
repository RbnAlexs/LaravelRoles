<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder{

public function run(){
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Chris Sevilleja',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('awesome'),
    ));
}

}