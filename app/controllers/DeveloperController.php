<?php

class DeveloperController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$developers = Developer::paginate(5);
		return View::make('developer')->withDeveloper( $developers );
	}


	public function store(){

	// create the validation rules ------------------------
	$rules = array(
		'name'            => 'required',
		'email'           => 'required', 			// just a normal required validation
		'url'      		  => 'required',
		'codename' 	      => 'required',
		'work_place'      => 'required',
		'description'     => 'required'
	);


	// create custom validation messages ------------------
	$messages = array(
		'required' => 'The :attribute is very important.'
	);

			// do the validation ----------------------------------
	// validate against the inputs from our form
	$validator = Validator::make(Input::all(), $rules, $messages);

	// check if the validator failed -----------------------
	if ($validator->fails()) {

		// get the error messages from the validator
		$messages = $validator->messages();

		// redirect our user back to the form with the errors from the validator
		return Redirect::to('developers/create')->withErrors($validator)->withInput();

	} else {
		// validation successful ---------------------------

		// our duck has passed all tests!
		// let him enter the database

		// create the data for our Developer
		$developer = new Developer;
		$developer->name           = Input::get('name');
		$developer->url            = Input::get('url');
		$developer->bio    		   = Input::get('description');
		$developer->email          = Input::get('email');
		$developer->work_place     = Input::get('work_place');
		$developer->code_name      = Input::get('codename');
		$developer->tags           = Input::get('tags');
		
		
		

		// save our Developer Details
		$developer->save();

		$developer_msg = "Naija Developer's Details Successfully Submitted";

		// redirect ----------------------------------------
		// redirect our user back to the form so they can do it all over again
		return Redirect::to('developers/create')->withMessage( $developer_msg );

		}
	} 


	public function create(){
		return View::make('devcreate');
	}

	public function show( $id ){

	}


}
