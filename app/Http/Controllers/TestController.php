<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class TestController extends Controller {
	public function indexAction() {
		echo '111';exit;
		$view_path = '/test/index';
		return view($view_path);
	}
}

