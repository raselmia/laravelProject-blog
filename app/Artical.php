<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    protected $fillable = array(
    	'title', 'blog', 'category','user_id'
    	);

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
