<!-- resources/views/quizzes/show.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $quiz->name }}</title>
    <script>
        const checkAnswer = function (isCorrect) {
            if (isCorrect) {
                alert('正解です！');
            } else {
                alert('不正解です。');
            }
        }

    </script>
</head>
<body>
    <h1>{{ $quiz->name }}</h1>
    @foreach ($quiz->questions as $question)
    <h2>{{ $question->text }}</h2>
    <ul>
        @foreach ($question->choices as $choice)
        <li onclick="checkAnswer({{ $choice->is_correct }})">
            {{ $choice->text }}
        </li>
        @endforeach
    </ul>
    @endforeach
</body>
</html>
