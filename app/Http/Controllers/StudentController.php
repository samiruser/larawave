<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

	public function index(){

		$students = Student::all();

		echo "<ul>";
		foreach($students as $student){
			echo "<li>{$student->name}</li>";
			echo "<li>{$student->email}</li>";
		}

		echo "</ul>";

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
}
