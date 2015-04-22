<?php namespace laranaija\Http\Controllers;

use laranaija\Developer;
use laranaija\Project;
use Redirect;

class HomeController extends Controller {

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
		$allProjects = Project::all();
		return view('adminProject')->withProject( $allProjects );
	}

	public function  showDevelopers()
	{
     $allDevelopers = Developer::all();
		return view('adminDeveloper')->withDeveloper( $allDevelopers );
	}

	public function approve($id)
	{
		$projects = Project::find($id);

		$projects->approval_status = 1;

		$projects->save();

		$message = "Project " . $projects->name . " has been Approved Successfully";

		// redirect our user back to the form so they can do it all over again
		return Redirect::to('admin/projects/')->withMessage( $message );
	}

	public function devapprove($id)
	{
		$developers = Developer::find($id);

		$developers->approval_status = 1;

		$developers->save();

		$message = "Developer " . $developers->name . " has been Approved Successfully";

		// redirect our user back to the form so they can do it all over again
		return Redirect::to('admin/developers/')->withMessage( $message );
	}




}
