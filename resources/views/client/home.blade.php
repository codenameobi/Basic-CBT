@extends('layouts.client')

@section('content')
<section id="banner" class="style2">
		<div class="inner">
			<span class="image">
				<img src="images/pic07.jpg" alt="" />
			</span>
			<header class="major">
				<h1>Select Categories</h1>
			</header>
		</div>
	</section>

	<!-- Main -->
	<div id="main">
		<!-- Two -->
		<section id="two" class="spotlights">
        @foreach($categories as $category)
            <section>
                <a href="#" class="image">
                    <img src="{{asset('images/pic01.jpg')}}" alt="" data-position="top center" />
                </a>
                <div class="content">
                    <div class="inner">
                        <header class="major">
                            <h3>{{$category->name}}</h3>
                        </header>
                        <p></p>
                        <ul class="actions">
                            <li><a href="/test/{{$category->id}}" class="button">Take Test</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        @endforeach
                                
		</section>
    </div>
@endsection