@extends('layouts.main')
@section('content')


  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>
            <h3>Awesome Projects Developed by Nigerian Laravel Developers</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button"> &#123;&#123;&#123; LARANAIJA &#125;&#125;&#125; </button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>We are smart</h1>
            <h3>Become a part of the Community if you are a Nigerian Laravel Developer</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button"> &#123;&#123;&#123; LARANAIJA &#125;&#125;&#125;</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>We are amazing</h1>
            <h3>Get To Meet Nigerian Laravel Developers</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button"> &#123;&#123;&#123; LARANAIJA &#125;&#125;&#125;</button>
      </div>
    </div>
  </div>





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
