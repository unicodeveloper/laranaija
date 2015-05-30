<?php namespace laranaija\Http\Controllers;

use Input;
use laranaija\Developer;
use laranaija\Feeder\Feed;
use laranaija\Mailers\DeveloperMailer as Mailer;
use Redirect;
use Validator;

class DeveloperController extends Controller {

	/**
   * holds the instance of laranaija\Mailers\DeveloperMailer
   *
   * @var $mailer
   */
	protected $mailer;

	/**
   * holds laravel news feed Url
   *
   * @var $laraUrl
   */
	protected $laraUrl;

	/**
   * Create a new DeveloperController instance.
   *
   * @param  laranaija\Mailers\DeveloperMailer $mailer
   * @return void
   */
	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	/**
   * Show the Developers screen to the user.
   *
   * @return void
   */
	public function index()
	{
		$url   			 = 'https://laravel-news.com/feed/';
		$feeds 			 = $this->getFeed($url);
		$developers  =  Developer::where('approval_status', '=', 1 )->paginate(3);

		return view('developer')->withDeveloper( $developers )->withFeed($feeds);
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
   * Store the Developers Profile Information.
   *
   * @return RedirectResponse
   */
	public function store(){
		/*
     * Create Validation rules
     */
		$rules = array(
			'name'            => 'required',
			'email'           => 'required',
			'url'      		  	=> 'required',
			'codename' 	      => 'required',
			'work_place'      => 'required',
			'description'     => 'required'
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

			return Redirect::to('developers/create')->withErrors($validator)->withInput();

		} else {
			/*
	     * Validation Successful
	     * Create the data for our Developer
	     */
			$developer = new Developer;
			$developer->name           = Input::get('name');
			$developer->url            = Input::get('url');
			$developer->bio    		   	 = Input::get('description');
			$developer->email          = Input::get('email');
			$developer->work_place     = Input::get('work_place');
			$developer->code_name      = Input::get('codename');
			$developer->tags           = Input::get('tags');
			$developer->save();

			/*
       * Email Notification immediately Developer Profile is submitted
       */
			$this->mailer->submitProfile();
			$developer_msg = "Naija Developer's Details Successfully Submitted, Approval happens within 24hrs";

			return Redirect::to('developers/create')->withMessage( $developer_msg );
		}
	}

	/**
   * Show the Create Developer Profile Form.
   *
   * @return Response
   */
	public function create(){
		return view('devcreate');
	}
}
