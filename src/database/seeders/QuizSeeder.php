<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class QuizSeeder extends Seeder
{
    public function run()
    {
        // ITクイズの作成
        $itQuiz = Quiz::create(['name' => 'ITクイズ']);

        $questions = [
            [
                'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
                'choices' => [
                    ['text' => '約79万人', 'is_correct' => false],
                    ['text' => '約28万人', 'is_correct' => false],
                    ['text' => '約183万人', 'is_correct' => true],
                ]
            ],
            [
                'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
                'choices' => [
                    ['text' => 'INTECH', 'is_correct' => false],
                    ['text' => 'BIZZTECH', 'is_correct' => false],
                    ['text' => 'X-TECH', 'is_correct' => true],
                ]
            ],
            [
                'text' => 'IoTとは何の略でしょう？',
                'choices' => [
                    ['text' => 'Internet of Things', 'is_correct' => true],
                    ['text' => 'Information on Tool', 'is_correct' => false],
                    ['text' => 'Integrate into Technology', 'is_correct' => false],
                ]
            ]
        ];

        foreach ($questions as $questionData) {
            $question = $itQuiz->questions()->create(['text' => $questionData['text'], 'image' => '', 'supplement' => '']);
            foreach ($questionData['choices'] as $choiceData) {
                $question->choices()->create($choiceData);
            }
        }

        // Aさんクイズの作成
        $personQuiz = Quiz::create(['name' => 'Aさんクイズ']);

        $questions = [
            [
                'text' => '出身地はどこでしょう？',
                'choices' => [
                    ['text' => '東京', 'is_correct' => true],
                    ['text' => 'ハワイ', 'is_correct' => false],
                    ['text' => 'ロンドン', 'is_correct' => false],
                ]
            ],
            [
                'text' => '在籍中の大学はどこでしょう？',
                'choices' => [
                    ['text' => '慶應義塾大学', 'is_correct' => true],
                    ['text' => 'ハーバード大学', 'is_correct' => false],
                    ['text' => 'トロント大学', 'is_correct' => false],
                ]
            ],
            [
                'text' => '動物に例えるとなんと言われることが多いでしょう？',
                'choices' => [
                    ['text' => '猫', 'is_correct' => false],
                    ['text' => '犬', 'is_correct' => true],
                    ['text' => 'コアラ', 'is_correct' => false],
                ]
            ]
        ];

        foreach ($questions as $questionData) {
            $question = $personQuiz->questions()->create(['text' => $questionData['text'], 'image' => '', 'supplement' => '']);
            foreach ($questionData['choices'] as $choiceData) {
                $question->choices()->create($choiceData);
            }
        }

        // ランダムなダミーデータの作成
        Quiz::factory()->count(100)->create();
    }
}





















































