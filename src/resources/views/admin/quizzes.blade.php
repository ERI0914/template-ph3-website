{{-- <x-app-layout> --}}
    {{-- <h1>クイズ一覧</h1>

    @if (session('status'))
        <p class="text-success">{{ session('status') }}</p>
    @endif

    <ul class="list-group">
        @if($quizzes->isEmpty())
            <p>クイズがありません。</p>
        @else
            @foreach ($quizzes as $quiz)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ url('/quizzes/' . $quiz->id) }}">{{ $quiz->name }}</a>
                    <div>
                        <a href="{{ url('/quizzes/' . $quiz->id . '/edit') }}" class="btn btn-warning btn-sm">編集</a>
                        <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか？')">削除</button>
                        </form>
                    </div>
                </li>
            @endforeach
        @endif
    </ul>

    <!-- ページネーションリンクの表示 -->
    <div class="mt-3">
        {{ $quizzes->links('pagination::bootstrap-4') }}
    </div>
</x-app-layout> --}}
