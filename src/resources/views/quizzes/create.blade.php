<x-app-layout>
    <div class="container mt-5">
        <h1>新しいクイズの作成</h1>

        <form action="{{ route('quizzes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="title">クイズタイトル</label>
            <input type="text" name="title" id="title" required>

            <div id="questions">
                @for ($i = 0; $i < 3; $i++)
                    <div class="question">
                        <h3>設問 {{ $i + 1 }}</h3>
                        <label for="questions[{{ $i }}][text]">設問文</label>
                        <input type="text" name="questions[{{ $i }}][text]" required>

                        <label for="questions[{{ $i }}][correct_choice]">正解の選択肢 (0-2)</label>
                        <input type="number" name="questions[{{ $i }}][correct_choice]" min="0" max="2" required>

                        <div class="choices">
                            @for ($j = 0; $j < 3; $j++)
                                <label for="questions[{{ $i }}][choices][{{ $j }}][text]">選択肢 {{ $j + 1 }}</label>
                                <input type="text" name="questions[{{ $i }}][choices][{{ $j }}][text]" required>
                            @endfor
                        </div>

                        <label for="questions[{{ $i }}][image]">画像 (オプション)</label>
                        <input type="file" name="questions[{{ $i }}][image]" accept="image/*">
                    </div>
                @endfor
            </div>

            <button type="submit">クイズ作成</button>
        </form>
    </div>
</x-app-layout>









