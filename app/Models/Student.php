<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $table = 'students';

	//to retrieve all students 
	$students = \App\Models\Students::all();

	//create new student record
	$student = new \App\Models\Student();
	$student->name = 'John Doe';
	$student->email = 'john@example.com';
	$student->save();

	//update student record
	$student = \App\Models\Student::find(1); // Assuming the student with ID 1 exists
	$student->name = 'Upated Name';
	$student->save();

	// delete student record
	$student = \App\Models\Studen::find(1); // Assuming the student with ID 1 exists
	$student->delete();
	



    use HasFactory;
}
