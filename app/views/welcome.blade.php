<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LaraNaija :: Home Of Nigerian Laravel Developers</title>
	<link href={{{ asset('css/bootstrap.min.css') }}} rel="stylesheet">
    <link href={{{ asset('css/main.css') }}} rel="stylesheet">
    <link href={{{ asset('css/font-awesome.min.css') }}} rel="stylesheet">
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="#">LaraNaija</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="/projects">Projects</a></li>
					<li><a href="/developers">Developers</a></li>
					<li><a href="/about">About</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

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


	<footer id="footer" class="top-space">
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="widget-body">
							<p>
							  Copyright &copy; 2014 Laranaija.com was created and is curated by <a href="https://twitter.com/unicodeveloper">Otemuyiwa Prosper</a>. Hosted on <a href="https://linode.com">Linode</a> using Forge.
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->

	{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
    {{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js') }}
    {{ HTML::script('js/jQuery.headroom.min.js') }}
    {{ HTML::script('js/template.js') }}
</body>
</html>
