<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>German Learning App</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>
        @if ($mode == 'german_to_russian')
            Choose the correct translation for the word: {{ $word->german }}
        @else
            Choose the correct translation for the word: {{ $word->russian }}
        @endif
    </h1>
    <h2>Current score: <span id="score">{{ $score }}</span></h2>
    <ul>
        @foreach($options as $option)
            <li>
                <button class="option" data-word-id="{{ $word->id }}" data-option="{{ $option->russian }}">
                    {{ $mode == 'german_to_russian' ? $option->russian : $option->german }}
                </button>
            </li>
        @endforeach
    </ul>

    <div id="result"></div>

    <form id="toggle-mode-form" action="/toggle-mode" method="POST" style="margin-top: 20px;">
        @csrf
        <button type="submit">
            Переключить на {{ $mode == 'german_to_russian' ? 'German word search in Russian' : 'Russian word search in German' }}
        </button>
    </form>

    <script>
        $(document).ready(function() {
            $('.option').on('click', function() {
                var wordId = $(this).data('word-id');
                var selectedOption = $(this).data('option');

                $.post('/check', {
                    _token: '{{ csrf_token() }}',
                    word_id: wordId,
                    selected_option: selectedOption
                }, function(data) {
                    if (data.correct) {
                        $('#result').text('Правильно!');
                    } else {
                        $('#result').text('Неправильно!');
                    }
                    $('#score').text(data.score);
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                });
            });
        });
    </script>
</body>
</html>
