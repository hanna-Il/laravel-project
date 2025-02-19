<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изучение немецкого</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .word {
            display: inline-block;
            margin: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
            user-select: none;
        }

        .nav-link {
            cursor: pointer;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Немецкий Учебник</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('words.index') }}">Слова</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sentence.index') }}">Предложения</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('grammar.index') }}">Предлоги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('conjugation.index') }}">Спряжение глаголов</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('verbs.index') }}">Опять про глаголы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('audio.index') }}">Аудирование</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
