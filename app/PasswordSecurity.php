<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordSecurity extends Model
{
    protected $fillable = [
        'name', 'email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    public static function store($request , $password_securities = null)
    {
        
		if($password_securities === null){
			$password_securities = new passwordsecurity();
		}
		$password_securities->fill($request);
		$password_securities->save();
	    return $password_securities;

    }
    
    public static function validationRules()
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required',
            'password' =>'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|'
            ];
    }
}

