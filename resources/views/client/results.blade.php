@extends('layouts.client')

@section('content')
<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                Results of your test
            </header>

            @if(session('status'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            <p>{{ session('status') }}</p>

                            <a href="{{ route('client.home') }}" class="button primary large">Start test again</a>
                        </div>
                    </div>
                </div>
            @endif

            <p>Total points: {{ $result->total_points }} points</p>

            <a href="{{ route('client.results.send', $result->id) }}" class="button primary">SEND TEST RESULT TO EMAIL</a>

        </div>
    </section>
</div>
@endsection