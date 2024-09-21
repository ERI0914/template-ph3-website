<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// モデルを取得する方法
// 基本的にメソッドの実行は「Question::メソッド名」 か 「Question→メソッド名()」だけど→メソッド名は最小単位で構成が完了した後じゃないと使えない
// Question::all(); これは最小単位がなくてもQuestionモデルを通して実行できるメソッドになっている

// $question = Question::find($id) findメソッドはprimaryキーを指定することで最小単位の情報 (テーブルの1行) を取得してインスタンスを返却する、存在しない場合はnullを返す
// $question = Question::first() firstメソッドは1番最初のレコード (テーブルの1行) を取得してインスタンスを返却する、存在しない場合はnullを返す
// $question = Question::findOrFail($id); findOrFailメソッドは基本はfindと同じで存在しないprimaryキーの情報を与えられるとエラーになり処理が中断される
// $questions = Question::all(); allはテーブルの情報を全件取得してCollection (コレクションはLaravelの機能) に全件分のインスタンスを詰め込んで返却する
// 全件分のインスタンスとは 便宜上Arrayっぽくかくけど、 ［Question(id=1)、Question(id=2)、Question(id=3)］みたいにモデルを入れ込んで返すよ

// $questions= Question::where('text', '何歳でしょうか')->get(); get()は条件指定にマッチする内容を全件取得してCollectionにマッチした分のインスタンスを詰め込んで返す

// モデルから他のモデルを取得する方法 (リレーション)
// 例えばfind(1)でquestions.id = 1の最小単位の情報を取得して$questionに詰め込んだとする、それに紐づくQuizを取得したい
// $question->quiz の形でQuizモデルにアクセスできる。questions.id = 1のquestionのquiz_idが1だとするとquizzes.id = 1のモデル情報にアクセスすることになる

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'text',
        'supplement',
        'quiz_id'
    ];
    // 「Quizの情報を取ってくる」略してquizにしている
    // めちゃくちゃ雑に書くとこんな感じでQuiz取ってきている
    // select questions.* from questions inner join quizzes on quizzes.id = questions.quiz_id where quesions.id = 1;
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}




