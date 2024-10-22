@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Прослушайте предложение и выберите правильный перевод</h1>

        <audio controls>
            <source src="{{ asset($exercise->audio_file) }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <form method="POST" action="{{ route('audio.check') }}">
            @csrf
            @foreach ($options as $option)
                <button type="submit" name="answer" value="{{ $option }}">{{ $option }}</button>
            @endforeach
            <input type="hidden" name="correctAnswer" value="{{ $exercise->correct_translation }}">
        </form>

        @if (session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @elseif (session('error'))
            <p style="color:red;">{{ session('error') }}</p>
        @endif
    </div>
@endsection
