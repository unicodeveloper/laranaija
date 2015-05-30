<?php namespace laranaija\Http\Controllers;

use Input;
use laranaija\Feeder\Feed;
use laranaija\Mailers\ProjectMailer as Mailer;
use laranaija\Project;
use Redirect;
use Validator;

class ProjectController extends Controller {

  /**
   * holds the instance of laranaija\Mailers\ProjectMailer
   *
   * @var $mailer
   */
  protected $mailer;

  /**
   * Create a new ProjectController instance.
   *
   * @param  laranaija\Mailers\ProjectMailer $mailer
   * @return void
   */
  public function __construct(Mailer $mailer)
  {
    $this->mailer = $mailer;
  }

  /**
   * Show the Projects screen to the user.
   *
   * @return Response
   */
  public function index()
  {
    $url = 'https://laravel-news.com/feed/';
    $feeds = $this->getFeed($url);
    $projects = Project::where('approval_status', '=', 1 )->paginate(5);

    return view('project')->withProject($projects)->withFeed($feeds);
  }

  /**
   * Show the RSS feed.
   * @param  string  $url
   * @return array $data
   */
  public function getFeed($url){
    $this->laraUrl = $url;
    $rss = Feed::loadRss($this->laraUrl);
    $data = [];

    foreach ($rss->item as $item) {
      array_push($data, $item);
    }

    return $data;
  }

  /**
   * Store the Projects Information.
   *
   * @return RedirectResponse
   */
  public function store(){
    /*
     * Create Validation rules
     */
    $rules = array(
      'title'            => 'required',
      'url'              => 'required',
      'description'      => 'required',
      'categories'       => 'required',
      'tags'             => 'required'
    );

    /*
     * Create custom validation messages
     */
    $messages = array(
      'required' => 'The :attribute is very important.'
    );

    /*
     * Validate against the Form Inputs
     */
    $validator = Validator::make(Input::all(), $rules, $messages);

    if($validator->fails()) {

      $messages = $validator->messages();

      return Redirect::to('projects/create')->withErrors($validator)->withInput();

    } else {
      /*
       * Validation Successful
       * Create the data for our project
       */
      $project = new Project;
      $project->name            = Input::get('title');
      $project->url             = Input::get('url');
      $project->description     = Input::get('description');
      $project->categories      = Input::get('categories')[0];
      $project->email           = Input::get('from');
      $project->tags            = Input::get('tags')[0];
      $project->approval_status = Input::get('approval_status');
      $project->save();

      /*
       * Email Notification immediately Project is submitted
       */
      $this->mailer->submitProject();
      $success_msg = "Project Successfully Submitted, Approval happens within 24 hours";

      return Redirect::to('projects/create')->withMessage( $success_msg );
    }
  }

  /**
   * Show the Create Project Form.
   *
   * @return Response
   */
  public function create(){
    return view('projcreate');
  }
}
