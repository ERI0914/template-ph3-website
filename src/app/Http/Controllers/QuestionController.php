<?php
app/Http/Controllers/QuestionController.php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // クイズの設問を20件ずつ表示
        $questions = Question::with('quiz')->paginate(20);
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        // クイズタイトルを取得してフォームで使用
        $quizzes = Quiz::all();
        return view('questions.create', compact('quizzes'));
    }

    public function store(Request $request)
    {
        // バリデーションの実行
        $validatedData = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'text' => 'required|string|max:200',
            'choices.*' => 'required|string|max:100',
            'correct_choice' => 'required|integer|between:1,3',
        ]);

        // 新しい設問を作成
        $question = Question::create([
            'quiz_id' => $validatedData['quiz_id'],
            'text' => $validatedData['text'],
        ]);

        // 選択肢を保存
        foreach ($request->choices as $key => $choiceText) {
            $question->choices()->create([
                'text' => $choiceText,
                'is_correct' => ($key + 1) == $request->correct_choice ? 1 : 0,
            ]);
        }

        // 設問一覧ページにリダイレクトし、成功メッセージを表示
        return redirect()->route('questions.index')->with('success', '新しい設問を作成しました！');
    }
}
