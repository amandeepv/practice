<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
    public static function store($request , $student = null)
    {	
		if($student === null){
			$student = new student();
		}
		$student->fill($request);
		$student->save();
	    return $student;

    }
    public function updateStudent($request){
        self::store($request, $this);
    }
}
