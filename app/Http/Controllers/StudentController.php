<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id','asc')->get();
        return view('student')->with('students',$students);
    }
    
    public function store(Request $request)
    {
        //$this->validate($request,['name'=>'required']);
		//Insert data into library Table
		return Student::store($request->student);
	}
	
	public function show($id)
    {
		$student = Student::findOrFail($id);
		return $students;
    }
    
    public function update(Request $request, $id)
    {
		$student = Student::findOrFail($id);
	    $student->updateStudent($request->student);
	  
		
    }
    
    public function destroy($id)
	{
		Student::where('id',$id)->delete();
		return "deleted success";
	}
}
