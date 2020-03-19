<?php

namespace App\Http\Controllers;

use App\Http\Requests\post\StoreBlogPost;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
	
	public function create() {
		return view('post.create');
	}
	
	public function store(StoreBlogPost $request) {
		
		$validated = $request->all();
		
		var_dump($validated);exit;
	}
}
