<!-- resources/views/quizzes/show.blade.php -->


<x-app-layout>
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
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 p-6">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">{{ $quiz->name }}</h1>
        
        @foreach ($quiz->questions as $question)
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-700">{{ $question->text }}</h2>

                @if ($question->image)
                    <img src="{{ asset('storage/' . $question->image) }}" alt="Question Image" class="max-w-xs mt-2 mb-4 rounded">
                @else
                    <p class="text-red-500">画像がありません。</p> <!-- 画像がない場合のメッセージ -->
                @endif

                <ul class="list-none p-0">
                    @foreach ($question->choices as $choice)
                        <li onclick="checkAnswer({{ $choice->is_correct }})" 
                            class="bg-gray-200 hover:bg-gray-300 cursor-pointer p-2 rounded mb-2 transition">
                            {{ $choice->text }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </body>
    </html>
</x-app-layout>
