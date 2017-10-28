<?php 

namespace App\Controllers;

class PagesController {

	public function  home(){

		return view('index'); // compact($users) is the same as 'users' => $users;
	}

	public function about(){

		return view('about');

	}

	public function contact(){
		return view('contact');
	}
}
