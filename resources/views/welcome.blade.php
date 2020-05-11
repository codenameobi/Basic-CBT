@extends('layouts.home')

@section('content')
	<!-- Banner -->
	<section id="banner" class="major">
		<div class="inner">
			<header class="major">
				<h1>Hi, my name is Obiora Nwude</h1>
			</header>
			<div class="content">
				<p>Welcome to a basic Computer Based Testing System designed by me</p>
				<ul class="actions">
					<li><a href="{{ route('client.home') }}" class="button next scrolly">Get Started</a></li>
				</ul>
			</div>
		</div>
	</section>
@endsection
