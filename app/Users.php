<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ["name","email","info"];
    public static function store($request , $user = null)
    {	
		if($user === null)
        {
			$user = new user();
		}
		$user->fill($request);
		$user->save();
    }
    public function updateUsers($request)
	{
		self::store($request, $this);
	}	
}
