
<!-- resources/views/quizzes/index.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クイズ一覧</title>
</head>
<body>
    <h1>クイズ一覧</h1>
    @if (session('status'))
        <p style="color: green;">{{ session('status') }}</p>
    @endif
    <ul>
        @if($quizzes->isEmpty())
        <p>クイズがありません。</p>
        @else
            @foreach ($quizzes as $quiz)
                <li>
                    <a href="{{ url('/quizzes/' . $quiz->id) }}">{{ $quiz->name }}</a>
                    <a href="{{ url('/quizzes/' . $quiz->id . '/edit') }}">編集</a>
                    <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                </li>
        @endforeach
        @endif
    </ul>
</body>
</html>

