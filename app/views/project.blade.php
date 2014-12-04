@extends('layouts.main')
@section('content')

	<!--<header id="head" class="secondary"></header>-->

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">PROJECTS</li>
		</ol>

		<div class="row">
			
		<!-- Article main content -->
		<article class="col-md-8 maincontent">
		    <header class="page-header">
				<h3 class="page-title">PROJECTS CRAFTED BY NIGERIAN LARAVEL DEVELOPERS</h3>
			</header>

				<!--Project-->
        <article class="blog-post margin-60">

            @if( $project )
                      <?php $kar = 1; ?>
                 @foreach ( $project as $proj )

                 	  <div class="date-container">
               			 <span class="day">
                    			{{ $kar }}                
                    	</span>
            		  </div>
            		  <h3 class='name-shift'> 
                		 {{ $proj->name }}
            		  </h3>
            		  <p class='url-shift'> 
                		<a href="{{ $proj->url }}" target="__blank" class="visible-desktop">View Site</a> 
            		  </p>
            		  <p>
            		    {{{ $proj->description }}}
            	        <br />
            		  </p>
            		  <p>Categories : {{{ $proj->categories }}}</p>
            		  <p>Tags : {{{ $proj->tags }}} </p>

            		  <hr/>
                       <?php $kar++ ?>
                 @endforeach

                  {{{ $project->links() }}}
            @endif
           
        </article>



				
		</article>
		<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Projects</h4>
						<p><a href={{{ URL::action('ProjectController@create') }}} >Add your Laravel Project</a></p>
					</div>
				</div>
			
				<img src={{{ asset('images/laravel-project.png') }}} style="margin-top: 28px;">
			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
@stop