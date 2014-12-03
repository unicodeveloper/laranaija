@extends('layouts.main')
@section('content')
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">AWESOME, REPUTABLE, NIGERIAN DEVELOPERS</h1>
				<p>
					<a class="btn btn-default btn-lg" role="button">PROJECTS</a>
					<a class="btn btn-action btn-lg" role="button">DEVELOPERS</a>
				</p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">The Best Place to Showcase Projects Developed by Laravel Nigerian Developers</h2>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to use this Hub</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Built by a Nigerian</h4></div>
					<div class="h-body text-center">
						<p></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Developer Publicity</h4></div>
					<div class="h-body text-center">
						<p></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Loved by Nigerians</h4></div>
					<div class="h-body text-center">
						<p></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Developer's support</h4></div>
					<div class="h-body text-center">
						<p> </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
@stop
