@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Выберите правильный перевод</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('words.check') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body text-center">
                <h2>{{ $mode === 'german_to_russian' ? $currentWord->german : $currentWord->russian }}</h2>
                <div class="d-flex justify-content-center flex-wrap">
                    @foreach ($options as $option)
                        <button type="submit" name="selected_word" value="{{ $option }}" class="btn btn-lg btn-outline-primary m-2">{{ $option }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <input type="hidden" name="current_word_id" value="{{ $currentWord->id }}">
        <input type="hidden" name="mode" value="{{ $mode }}">
    </form>

    <div class="d-flex justify-content-center mt-4">
        <button class="btn btn-lg btn-secondary mx-2" onclick="window.location.href='{{ route('words.index', ['mode' => 'german_to_russian']) }}'">Немецкий -> Русский</button>
        <button class="btn btn-lg btn-secondary mx-2" onclick="window.location.href='{{ route('words.index', ['mode' => 'russian_to_german']) }}'">Русский -> Немецкий</button>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <h3>Счетчик: {{ session('score', 0) }}</h3>
    </div>
@endsection
