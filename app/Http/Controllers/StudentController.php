<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

	public function index(){

		$all_students = Student::all();
		
		return view('students.index', compact('all_students'));

	}

	public function insert(){

		$student_data = [
			'name' => 'Liyana',
			'email' => 'liyana@nooriwave.com',
			'class' => 0
		];

		Student::create($student_data);


		return 'Insert student data to db';
	}

	public function update(){

		$new_data = [
			'class' => 2,
		];

		Student::where('id', 1)->update($new_data);

	}


	public function delete(){


		Student::where('id', 2)->delete();

	}

	public function show($id){

		$student = Student::findOrFail($id);

		return $student;
	}
}
