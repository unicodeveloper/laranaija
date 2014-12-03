@extends('layouts.main')
@section('content')

	<header id="head" class="secondary"></header>

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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>
				<p>Consectetur cupiditate labore repudiandae beatae nisi fugiat facilis natus illum vitae doloremque. In, perspiciatis, natus, impedit voluptas itaque odio repudiandae placeat nisi totam repellendus earum dolores mollitia tempore quasi beatae alias cum dicta maxime laborum corporis harum porro magnam laboriosam.</p>
				<p>Aut, eaque, minus atque alias odio mollitia cum nisi ipsa nulla natus quae minima similique ipsam aspernatur molestias animi in deleniti nam. Tempora, labore, modi eum perspiciatis doloremque sequi nam illo corporis iusto maiores nisi recusandae repellat animi reiciendis accusamus.</p>

				<h2>A, quibusdam, nobis, eveniet consequatur</h2>
				<p>A, quibusdam, nobis, eveniet consequatur alias doloremque officia blanditiis fuga et numquam labore reiciendis voluptas quis repellat quos sunt non dolore consectetur at sit nam tenetur dolorem? Harum, quas, sit perspiciatis esse odit temporibus aperiam nulla aspernatur sequi fugiat tempore?</p>
				<p>Ad velit consequuntur quo qui odit quam sapiente repudiandae et ea pariatur? Ex sapiente beatae nobis consectetur ea. Deleniti, beatae, magnam, dolorum, fuga nostrum quas laboriosam sapiente temporibus enim voluptates ullam impedit atque quae provident quos mollitia aperiam perferendis amet.</p>

				<blockquote>Numquam, ut iure quia facere totam quas odit illo incidunt. Voluptatem, nostrum, ex, quasi incidunt similique cum maxime expedita unde labore inventore excepturi veniam corporis sequi facere ullam voluptates amet illum quam fuga voluptatibus ipsum atque sunt eos. Ut, necessitatibus.</blockquote>
				<p>Odit, laudantium, dolores, natus distinctio labore voluptates in inventore quasi qui nobis quis adipisci fugit id! Aliquam alias ea modi. Porro, odio, sed veniam hic numquam qui ad molestiae sint placeat expedita? Perferendis, enim qui numquam sequi obcaecati molestiae fugiat!</p>
				<p>Aperiam, odit, quasi, voluptate fugiat quisquam velit magni provident corporis animi facilis illo eveniet eum obcaecati adipisci blanditiis quas labore doloribus eos veniam repudiandae suscipit tempora ad harum odio eius distinctio hic deleniti. Sunt fuga ad perspiciatis repellat deleniti omnis!</p>

				<h3>Numquam, ut iure quia facere totam quas odit illo incidunt</h3>
				<p>Est, maiores, fuga sed nemo qui veritatis ducimus placeat odit quisquam dolorum. Rem, sunt, praesentium veniam maiores quia molestias eos fugit eaque ducimus veritatis provident assumenda. Quia, fuga, voluptates voluptatibus quis enim nam asperiores aliquam dignissimos ullam recusandae debitis iste.</p>
				<p>Dignissimos, beatae, praesentium illum eos autem perspiciatis? Minus, non, tempore, illo, mollitia exercitationem tempora quas harum odio dolores delectus quidem laudantium adipisci ducimus ullam placeat eaque minima quae iure itaque corporis magni nesciunt eius sed dolor doloremque id quasi nisi.</p>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Developers</h4>
						<a href={{{ URL::action('DeveloperController@create') }}} > Add yourself as a Laravel Developer</a>
					</div>
				</div>
			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	

@stop