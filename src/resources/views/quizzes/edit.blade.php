<!DOCTYPE html>
<html>
<head>
    <title>クイズ編集</title>
</head>
<body>
    <h1>クイズ編集</h1>

    <form action="{{ route('quizzes.update', $quiz->id) }}" method="POST">
        @csrf
        <label for="name">タイトル:</label>
        <input type="text" id="name" name="name" value="{{ $quiz->name }}">
        <button type="submit">更新</button>
    </form>
</body>
</html>
