@extends('layouts.client')

@section('content')
<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <div class="inner">
        @foreach($categories as $category)
            <header class="major">
                <h1>{{ $category->name }} Test</h1>
            </header>

            <div id="display">

            </div>
            <div id="submitted">

            </div>

            @if(session('status'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('client.test.store') }}">
                @csrf
                @foreach($category->categoryQuestions as $question)
                    <div class="row gtr-uniform">
                        <!-- Break -->
                        <div class="col-12 @if(!$loop->last)mb-3 @endif">
                            <label>{{ $question->question_text }}</label>
                            <input type="hidden" name="questions[{{ $question->id }}]" value="">
                            @foreach($question->questionOptions as $option)
                                <div class="col-4 col-12-small">
                                    <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}"@if(old("questions.$question->id") == $option->id) checked @endif>
                                    <label class="form-check-label" for="option-{{ $option->id }}">
                                        {{ $option->option_text }}
                                    </label>
                                </div>
                            @endforeach

                            @if($errors->has("questions.$question->id"))
                                <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                    <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                </span>
                            @endif
                        </div>
                        <!-- Break -->
                    <div>
                @endforeach     
                    </div>
            @endforeach
                            
                    <!-- Break -->
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Submit" class="primary" /></li>
                        </ul>
                    </div>                                
                </form>
            </div>
        </div>                       
    </section>
</div>
    
@endsection