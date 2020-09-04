<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pictures extends Model
{
	protected $fillable = [ 'id', 'filename' ];
	public function blog(){
		return $this->belongsTo('App\Blog');
	}
}
