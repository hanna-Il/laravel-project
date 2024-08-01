@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Составьте правильное предложение</h1>

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

    <form action="{{ route('sentence.check') }}" method="POST" id="sentenceForm">
        @csrf
        <div id="sortable-container" class="d-flex justify-content-center mb-4">
            @foreach ($words as $word)
                <div class="word">{{ $word }}</div>
            @endforeach
        </div>

        <input type="hidden" name="order" id="order">
        <input type="hidden" name="sentence_id" value="{{ $sentenceId }}">

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Проверить</button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sortableContainer = document.getElementById('sortable-container');
            var sortable = new Sortable(sortableContainer, {
                animation: 150,
                onEnd: function() {
                    var order = [];
                    sortableContainer.querySelectorAll('.word').forEach(function(word) {
                        order.push(word.textContent.trim());
                    });
                    document.getElementById('order').value = JSON.stringify(order);
                }
            });

            document.getElementById('sentenceForm').addEventListener('submit', function(event) {
                var order = [];
                sortableContainer.querySelectorAll('.word').forEach(function(word) {
                    order.push(word.textContent.trim());
                });
                document.getElementById('order').value = JSON.stringify(order);

                if (order.length !== {{ count($words) }}) {
                    event.preventDefault();
                    alert('Выберите все слова!');
                }
            });
        });
    </script>
@endsection
