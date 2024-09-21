<!-- resources/views/quizzes/edit.blade.php -->
<x-app-layout>
    <h1>{{ $quiz->name }} の編集</h1>

<form action="{{ route('quizzes.update', $quiz->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">クイズタイトル</label>
    <input type="text" name="name" id="title" value="{{ $quiz->name }}" required>

    <div id="questions">
        @foreach ($quiz->questions as $index => $question)
            <div class="question">
                <h3>設問 {{ $index + 1 }}</h3>
                <label for="questions[{{ $index }}][text]">設問文</label>
                <input type="text" name="questions[{{ $index }}][text]" value="{{ $question->text }}" required>

                <label for="questions[{{ $index }}][correct_choice]">正解の選択肢 (0-2)</label>
                <input type="number" name="questions[{{ $index }}][correct_choice]" value="{{ $question->choices->search(fn($c) => $c->is_correct) }}" min="0" max="2" required>

                <div class="choices">
                    @foreach ($question->choices as $choiceIndex => $choice)
                        <label for="questions[{{ $index }}][choices][{{ $choiceIndex }}]">選択肢 {{ $choiceIndex + 1 }}</label>
                        <input type="text" name="questions[{{ $index }}][choices][{{ $choiceIndex }}]" value="{{ $choice->text }}" required>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <button type="submit">クイズ更新</button>
</form>



</x-app-layout>
















