<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PasswordSecurity;

class PasswordSecurityController extends Controller
{
    public function index()
    {
        $password_securities = PasswordSecurity::orderBy('id','asc')->get();
        return view('password.home')->with('password_securities',$password_securities);
    }
    
    public function store(Request $request)
    {
        $this->validateData($request->student, PasswordSecurity::validationRules());
        /*$this->validate($request->student,['password' => 'required|
               min:6|
               password']);*/
        //$this->validate($request,['name'=>'required']);
		//Insert data into password_security table Table
		PasswordSecurity::store($request->student);
	}
}
