@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Выберите правильную форму глагола</h1>

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

    <form action="{{ route('conjugation.check') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body text-center">
                <h2>{{ $exercise->person }} ({{ $exercise->tense }}) - {{ $exercise->verb }}</h2>
                <div class="d-flex justify-content-center flex-wrap">
                    @foreach ($conjugations as $conjugation)
                        <button type="submit" name="selected_form" value="{{ $conjugation }}" class="btn btn-lg btn-outline-primary m-2">{{ $conjugation }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <input type="hidden" name="exercise_id" value="{{ $exercise->id }}">
    </form>

    <div class="d-flex justify-content-center mt-4">
        <h3>Счетчик: {{ session('score', 0) }}</h3>
    </div>
@endsection
