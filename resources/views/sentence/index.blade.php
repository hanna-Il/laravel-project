<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Composing sentences</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .word {
            display: inline-block;
            margin: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .selected {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4">Make a correct sentence</h1>

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
        <div class="d-flex justify-content-center mb-4">
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
</div>

<script>
    let selectedWords = [];

    document.querySelectorAll('.word').forEach(word => {
        word.addEventListener('click', function () {
            if (this.classList.contains('selected')) {
                this.classList.remove('selected');
                selectedWords = selectedWords.filter(w => w !== this.textContent);
            } else {
                this.classList.add('selected');
                selectedWords.push(this.textContent);
            }

            document.getElementById('order').value = JSON.stringify(selectedWords);
        });
    });

    document.getElementById('sentenceForm').addEventListener('submit', function (event) {
        if (selectedWords.length !== {{ count($words) }}) {
            event.preventDefault();
            alert('Выберите все слова!');
        }
    });
</script>
</body>
</html>
