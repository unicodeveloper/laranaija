@extends('layouts.main')
@section('content')

	<!-- <header id="head" class="secondary"></header> -->

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">ABOUT</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h3 class="page-title">ABOUT LARANAIJA</h3>
				</header>

                <img src={{{ asset('images/laranaija.png') }}} >

				<blockquote>"LARANAIJA" is a showcase of web sites and web applications that were built with Laravel PHP framework

by Nigerians in Nigeria. Laranaija.com is a hub for Developers in Nigeria that manipulate and craft web applications using the Wonderful Laravel Framework

It accepts submissions from users and after a short review process the websites are published on the main page of the site and will become discoverable.

Laranaija.com was created by Otemuyiwa Prosper in December 2014 as a curated collection of web apps built with Laravel by Nigerian Laravel Developers.</blockquote>
				
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>Vacancies</h4>

					 <img src={{{ asset('images/coming-soon.jpg') }}} >
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

@stop