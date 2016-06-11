<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = array(
    	'id', 'first_name', 'last_name','mobile', 'phone', 'address','user_id', 'profession'
    	);

    public function user(){
    	return $this->belongs('App\User');
    }
}
