<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(['email' => 'joshua@movemento.com', 'name'=>'Joshua', 'password' => Hash::make('M0vemento')]);
        User::create(['email' => 'candela@movemento.com', 'name'=>'Candela', 'password' => Hash::make('M0vemento'),]);
        User::create(['email' => 'tom@movemento.com', 'name'=>'Tom', 'password' => Hash::make('M0vemento'),]);
        User::create(['email' => 'ben@movemento.com', 'name'=>'Ben', 'password' => Hash::make('M0vemento'),]);
    }

}

?>