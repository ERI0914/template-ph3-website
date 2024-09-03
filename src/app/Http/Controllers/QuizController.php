<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Quiz;

// class QuizController extends Controller
// {
//     public function show($id)
//     {
//         $quiz = Quiz::with('questions.choices')->findOrFail($id);
//         return view('quiz.show', compact('quiz'));
//     }
// }



// namespace App\Http\Controllers;

// use App\Models\Quiz;
// use Illuminate\Http\Request;

// class QuizController extends Controller
// {
//     public function index()
//     {
//         $quizzes = Quiz::all();
//         return view('quizzes.index', compact('quizzes'));
//     }
// }


// namespace App\Http\Controllers;

// use App\Models\Quiz;
// use Illuminate\Http\Request;

// class QuizController extends Controller
// {
//     public function index()
//     {
//         // クイズデータを取得
//         $quizzes = Quiz::all();


//         // デバッグメッセージを追加
//         dd($quizzes);

//         // ビューにデータを渡す
//         return view('quizzes.index', compact('quizzes'));
//     }
// }








// // app/Http/Controllers/QuizController.php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Quiz;

// class QuizController extends Controller
// {
//     public function index()
//     {
//         $quizzes = Quiz::all();
//         return view('quizzes.index', compact('quizzes'));
//     }

//     public function show($id)
//     {
//         $quiz = Quiz::with('questions.choices')->findOrFail($id);
//         return view('quizzes.show', compact('quiz'));
//     }
// }




// public function show($quiz)
// {
//     // $quizに応じて、対応するクイズのデータを取得するロジックを実装
//     $quizData = Quiz::find($quiz);

//     return view('quizzes.show', ['quizData' => $quizData]);
// }




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    // クイズ一覧を表示するメソッド
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    // クイズ詳細を表示するメソッド
    public function show($id)
    {
        $quiz = Quiz::with('questions.choices')->findOrFail($id);
        // デバックをしたい！！ (ここまでの処理が適切か検証したい)
        return view('quizzes.show', compact('quiz'));
        // compactってなにしているか
        // compact('quiz') は 変数$quizを配列のキーバリューに設定する
        // ['quiz' => $quiz] と同じようなのを作っているのが compact('quiz')
    }



    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('quizzes.edit', compact('quiz'));
    }

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


    public function destroy($id)
{
    $quiz = Quiz::findOrFail($id);
    $quiz->delete();

    return redirect()->route('quizzes.index')->with('status', '削除しました！');
}

}