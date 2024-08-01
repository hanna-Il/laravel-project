<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>German Learning App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: #f5f5f5;
        }
        h1, h2 {
            margin: 20px;
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        button.option {
            font-size: 18px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button.option:hover {
            background-color: #45a049;
        }
        button.option:active {
            background-color: #39843b;
        }
        #result {
            margin: 20px;
            font-size: 20px;
            color: #333;
        }
        form#toggle-mode-form {
            margin-top: 20px;
        }
        form#toggle-mode-form button {
            font-size: 16px;
            padding: 10px 20px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        form#toggle-mode-form button:hover {
            background-color: #007bb5;
        }
        form#toggle-mode-form button:active {
            background-color: #006f9b;
        }
    </style>
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
                <button class="option" data-word-id="{{ $word->id }}" data-option="{{ $mode == 'german_to_russian' ? $option->russian : $option->german }}">
                    {{ $mode == 'german_to_russian' ? $option->russian : $option->german }}
                </button>
            </li>
        @endforeach
    </ul>

    <div id="result"></div>

    <form id="toggle-mode-form" action="/toggle-mode" method="POST" style="margin-top: 20px;">
        @csrf
        <button type="submit">
            Switch to {{ $mode == 'german_to_russian' ? 'Russian to German mode' : 'German to Russian mode' }}
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
                        $('#result').text('Correct!');
                    } else {
                        $('#result').text('Incorrect!');
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
