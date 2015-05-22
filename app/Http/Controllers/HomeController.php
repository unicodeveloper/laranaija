<?php namespace laranaija\Http\Controllers;

use laranaija\Developer;
use laranaija\Project;
use laranaija\Mailers\DeveloperMailer as DevMailer;
use laranaija\Mailers\ProjectMailer as ProMailer;
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

	protected $promailer, $devmailer;

	public function __construct(ProMailer $promailer, DevMailer $devmailer){

		 $this->promailer = $promailer;
		 $this->devmailer = $devmailer;
	}

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

		$email = $projects->email;

		$projectTitle = strtoupper($projects->name);

		$projects->save();

		$message = "Project " . $projects->name . " has been Approved Successfully";

		// Sends email to the User that his project has been approved.
		$this->promailer->notifyUserOfApproval($email, $data = [], $projectTitle);

		// redirect our user back to the form so they can do it all over again
		return Redirect::to('admin/projects/')->withMessage( $message );
	}

	public function devapprove($id)
	{
		$developers = Developer::find($id);

		$developers->approval_status = 1;

		$email 		= $developers->email;

		$codeName =	strtoupper($developers->code_name);

		$developers->save();

		$message = "Developer " . $developers->name . " has been Approved Successfully";

		// Sends email to the Developer notifiying him that his profile is now visible.
		$this->devmailer->notifyDevOfApproval($email, $data = [], $codeName);

		// redirect our user back to the form so they can do it all over again
		return Redirect::to('admin/developers/')->withMessage($message);
	}




}
