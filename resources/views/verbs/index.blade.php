@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Выберите правильную форму глагола</h1>

        <p>{{ $sentence }}</p>

        <form method="POST" action="{{ route('verbs.check') }}">
            @csrf
            @foreach ($options as $option)
                <button type="submit" name="answer" value="{{ $option }}">{{ $option }}</button>
            @endforeach
            <input type="hidden" name="correctAnswer" value="{{ $correctAnswer }}">
        </form>

        @if (session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @elseif (session('error'))
            <p style="color:red;">{{ session('error') }}</p>
        @endif
    </div>
@endsection
