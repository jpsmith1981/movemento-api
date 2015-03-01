<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movemento extends Model {

	//
    protected $table = 'movementos';

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
