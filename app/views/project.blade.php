@extends('layouts.main')
@section('content')

	<header id="head" class="secondary"></header>

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
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/1.jpg" alt=""></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/2.jpg" alt=""></p>
						<p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
@stop