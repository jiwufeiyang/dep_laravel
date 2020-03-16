<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth', [
			'except' => ['index']
		]);
		
		// $this->middleware('log')->only('index');
	}


    //
	public function index(Request $request, $id) {
		$name = $request->all();
		
		if ($request->has('id')) {
			echo 'ddddd';
		}
		echo $id;
		var_dump($name);exit;
	}
}
