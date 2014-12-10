<?php
namespace laranaij\repositories;

use Developer;

class DeveloperRepository implements DeveloperRepositoryInterface{

	public function selectAll()
	{

		return Developer::where('approval_status', '=', 1 )->paginate(5);
	}


	public function storeDetails()
	{
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
			$redirectWithErrors =  Redirect::to('developers/create')->withErrors($validator)->withInput();

			return $redirectWithErrors;

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

			$developer_msg = "Naija Developer's Details Successfully Submitted, Approval happens within 24hrs";

			// redirect ----------------------------------------
			// redirect our user back to the form so they can do it all over again
			$redirectWithMessage =  Redirect::to('developers/create')->withMessage( $developer_msg );

			return $redirectWithMessage;

		}
	}
}