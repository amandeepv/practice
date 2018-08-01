<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','asc')->get();
        return view('home')->with('users',$users);
    }
    
    public function store(Request $request)
    {
    //$this->validate($request,['name'=>'required']);
		//Insert data into library Table
		return User::store($request->student);
	}
	public function update($id)
    {
		$users = User::findOrFail($id);
		return view ('update',['users' => $users]);
    }
	public function edit(Request $request, $id)
    {
		$users = Users::findOrFail($id);
		$users->updateUsers($request);
		return redirect()->route('home')->with('info','Updates saved successfully|');
    }
	public function delete($id)
	{
		Users::where('id',$id)->delete();
		return redirect()->route('home')->with('info','Delete successfully|');
	}
}
