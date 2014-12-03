@extends('layouts.main')
@section('content')

<div class="container" style="margin-top:50px;">
     <form method="POST" action={{ URL::action('ProjectController@create') }} class="form-horizontal" role="form">
            <div class="row" style="margin-bottom:40px;">
                <div class="col-md-8 col-md-offset-2">
                    <h1>You Developed a Project with Laravel?</h1>

                    <h3>Let the Nigerian Developer Community Know About It</h3>
                  
                    <b>PLEASE NOTE: </b>
                        
                   <p>Please do not post multiple times. If you submit the same site more than once, the latest submission will be used</p>

                   
					@if( Session::has('message'))
					    {{{ Session::get('message') }}}
					@endif
				        
                   <p>
                   	   <input class="form-control  @if ($errors->has('name')) has-error @endif" placeholder="Name of the Project/Site" name="title" type="text" value="{{ Input::old('title') }}">
                   	   @if ($errors->has('title')) <p class="help-block"> {{ $errors->first('title') }}</p> @endif
                   </p>
                   <p>
                   		<input class="form-control @if ($errors->has('url')) has-error @endif" placeholder="URL of the Project/Site" name="url" type="text" value="{{ Input::old('url') }}">
                   		@if ($errors->has('url')) <p class="help-block"> {{ $errors->first('url') }}</p> @endif
                   </p>
                   <p>
                   		<textarea class="form-control @if ($errors->has('description')) has-error @endif" placeholder="Describe the Project" rows="4" name="description" cols="50" value="{{ Input::old('description') }}" ></textarea>
                        @if ($errors->has('description')) <p class="help-block"> {{ $errors->first('description') }}</p> @endif
                   </p>
                   <p><select multiple="multiple" id="categories" placeholder="Choose Categories for this site" class="form-control @if ($errors->has('categories')) has-error @endif" name="categories[]">
		                   <option value="1">Business</option>
		                   <option value="2">E-Commerce</option>
		                   <option value="3">Blogs</option>
		                   <option value="4">Uncategorized</option>
		                   <option value="9">Open Source</option>
		                   <option value="13">User driven</option>
		                   <option value="17">Portfolio</option>
		                   <option value="18">Customer Support</option>
		                   <option value="22">Medical</option>
		                   <option value="26">Agency</option>
		                   <option value="30">Travel</option>
		                   <option value="34">Entertainment</option>
		                   <option value="38">Fashion</option>
		                   <option value="39">Education</option>
		              </select>
		              @if ($errors->has('categories')) <p class="help-block"> {{ $errors->first('categories') }}</p> @endif
		            </p>
                   <p><select multiple="multiple" id="tags" placeholder="Choose tags for this site" class="form-control @if ($errors->has('tags')) has-error @endif" name="tags[]">
                   		   <option value="6">Blog</option>
                   		   <option value="4">Bootstrap</option>
                   		   <option value="7">CMS</option>
                   		   <option value="5">Foundation</option>
                   		   <option value="3">gallery</option>
                   		   <option value="17">Gumby</option>
                   		   <option value="1">Laravel 3</option>
                   		   <option value="2">Laravel 4</option>
                   		   <option value="8">Packages</option>
                   		   <option value="9">Photos</option>
                   		   <option value="10">Social</option>
                   		   <option value="13">Wardrobe CMS</option>
                   	  </select>
                   </p>
                     @if ($errors->has('tags')) <p class="help-block"> {{ $errors->first('tags') }}</p> @endif
                   <p>
                     <input class="form-control" placeholder="Your email (optional)" name="from" type="text" value="{{ Input::old('from') }}"></p>
                   <p><input class="btn btn-default btn-lg btn-block" type="submit" value="Submit site"></p>
                 </div>
                </div>
            </form>
            </div>
    </div>  

@stop