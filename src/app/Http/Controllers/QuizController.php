<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    // クイズ一覧を表示するメソッド
    public function index()
    {
        // クイズを20件ずつ取得する
        $quizzes = Quiz::paginate(20);
        return view('quizzes.index', compact('quizzes'));
    }

    // クイズ詳細を表示するメソッド
    public function show($id)
    {
        $quiz = Quiz::with('questions.choices')->findOrFail($id);
        return view('quizzes.show', compact('quiz'));
    }

    // クイズ編集画面を表示するメソッド
    public function edit($id)
    {
        // 質問と選択肢を一緒に読み込む
        $quiz = Quiz::with('questions.choices')->findOrFail($id);
        return view('quizzes.edit', compact('quiz'));
    }

    // クイズを更新するメソッド
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->name = $request->input('name');
        $quiz->save();

        return redirect()->route('quizzes.index')->with('status', '更新されました！');
    }

    // クイズを削除するメソッド
    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('status', '削除しました！');
    }

    // 新規作成フォームの表示
    public function create()
    {
        return view('quizzes.create');
    }

    // 新しいクイズを保存するメソッド


    public function store(Request $request)
    {
        // バリデーションルールとカスタムメッセージ
        $request->validate([
            'questions' => 'required|array|min:3|max:3', // 設問は3つ必要
            'questions.*.text' => 'required|string|max:250', // 最大250文字のバリデーション
            'questions.*.choices' => 'required|array|min:3|max:3',
            'questions.*.choices.*.text' => 'required|string', // 各選択肢のテキストのバリデーション
            'questions.*.correct_choice' => 'required|integer|min:0|max:2',
        ], [
            'questions.*.text.max' => '設問文は250文字以内で入力してください。',
        ]);
    
        // クイズを保存
        $quiz = Quiz::create(['name' => $request->title]);
    
        // 各設問と選択肢を保存
        foreach ($request->questions as $questionData) {
            // 質問を保存
            $question = $quiz->questions()->create([
                'text' => $questionData['text'],
                'image' => $questionData['image']->store('public/img'), // デフォルト画像パスを指定
            ]);
    
            // 選択肢の保存
            foreach ($questionData['choices'] as $index => $choiceData) {
                $isCorrect = $index == $questionData['correct_choice'];
                $question->choices()->create([
                    'text' => $choiceData['text'],
                    'is_correct' => $isCorrect,
                ]);
            }
        }
    
        return redirect()->route('quizzes.index')->with('success', 'クイズが作成されました。');
    }
    





































    
//     public function store(Request $request)
//     {
//         // バリデーション: クイズタイトルと設問の数をチェック
//         $request->validate([
//             'title' => 'required|max:255',
//             'questions' => 'required|array|min:3|max:3', // 設問は3つ必要
//             'questions.*.text' => 'required|string',
//             'questions.*.choices' => 'required|array|min:3|max:3',
//             'questions.*.choices.*.text' => 'required|string', // 各選択肢のテキストのバリデーション
//             'questions.*.correct_choice' => 'required|integer|min:0|max:2',
//         ]);

//         // クイズを保存
//         $quiz = Quiz::create(['name' => $request->title]);

//         // 各設問と選択肢を保存
//         foreach ($request->questions as $questionData) {
//             // 質問を保存
//             $question = $quiz->questions()->create([
//                 'text' => $questionData['text'],
//                 'image' => $questionData['image'] ->store('public/img'), // デフォルト画像パスを指定
//             ]);


//             // 選択肢の保存
//             foreach ($questionData['choices'] as $index => $choiceData) {
//                 $isCorrect = $index == $questionData['correct_choice'];
//                 $question->choices()->create([
//                     'text' => $choiceData['text'],
//                     'is_correct' => $isCorrect,
//                 ]);
//             }
//         }

//         return redirect()->route('quizzes.index')->with('success', 'クイズが作成されました。');
//     }
}
