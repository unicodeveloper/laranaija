@extends('layouts.main')
@section('content')

	<!--<header id="head" class="secondary"></header>-->

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">DEVELOPERS</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h3 class="page-title">NIGERIAN LARAVEL DEVELOPERS</h3>
				</header>

				<!--Get List Of Developers-->
		        <article class="blog-post margin-60">

		            @if( $developer )
		                      <?php $kar = 1; ?>
		                 @foreach ( $developer as $dev )

		                    @if( $dev->approval_status == 1)

		                 	  <div class="date-container">
		               			 <span class="day">
		                    			{{ $kar }}                
		                    	</span>
		            		  </div>
		            		  <h3 class='name-shift'> 
		                		 {{ strtoupper( $dev->name ) }}
		            		  </h3>
		            		  <p class='url-shift'> 
		                		<a href="{{ $dev->url }}" target="__blank" class="visible-desktop">More Info</a> 
		            		  </p>
		            		  <p>
		            		    {{{ $dev->bio }}}
		            	        <br />
		            		  </p>
		            		  <p>Work Place : {{{ $dev->work_place }}}</p>
		            		  <p>Code Name : {{{ strtoupper( $dev->code_name ) }}} </p>
		            		  <a href="mailto:{{ $dev->email }}" class="btn btn-danger"> CONTACT {{{ strtoupper( $dev->code_name ) }}} </a>

		            		  <hr/>
		            		@endif
		                       <?php $kar++ ?>
		                 @endforeach

		                 {{ $developer->links() }}
		            @endif
		           
		        </article>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Developers</h4>
						<a href={{{ URL::action('DeveloperController@create') }}} > Add yourself as a Laravel Developer</a>
					</div>

					<img src={{{ asset('images/laravel-developer.jpg') }}} style="margin-top: 28px;">
				</div>
			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	

@stop