<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Movemento;

class MomentoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('movementos')->delete();

        Movemento::create(['note' => 'Fun Movemento 1', 'avatar'=>'fun-pic.png', 'userID' => '1', 'latitude' => '34.018366', 'longitude' => '-118.486679']);
        Movemento::create(['note' => 'Fun Movemento 2', 'avatar'=>'fun-pic.png', 'userID' => '2', 'latitude' => '34.018367', 'longitude' => '-118.486673']);
        Movemento::create(['note' => 'Fun Movemento 3', 'avatar'=>'fun-pic.png', 'userID' => '3', 'latitude' => '34.018361', 'longitude' => '-118.486682']);
        Movemento::create(['note' => 'Fun Movemento 4', 'avatar'=>'fun-pic.png', 'userID' => '4', 'latitude' => '34.018366', 'longitude' => '-118.486686']);

    }

}

?>