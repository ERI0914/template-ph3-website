
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $quiz->name }}</h1>

    @foreach($quiz->questions as $question)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $question->text }}</h5>
            @if ($question->image)
            <img src="{{ $question->image }}" class="card-img-top" alt="...">
            @endif
            <p class="card-text">{{ $question->supplement }}</p>

            <ul class="list-group list-group-flush">
                @foreach($question->choices as $choice)
                <li class="list-group-item">{{ $choice->text }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
</div>
@endsection
