<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

	public function homepage(){
		echo "This is the homepage function of HomeController class";
	}

	public function about(){
		return "About PAGE";
	}
}
