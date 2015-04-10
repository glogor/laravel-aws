<?php namespace App\Http\Controllers;

class ApiController extends Controller {

	

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function neighborhood()
	{
		//return view('api.neighborhood');
		return 'GET neighborhood ';
	}
}
