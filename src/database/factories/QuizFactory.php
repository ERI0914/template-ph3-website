<?php

// namespace Database\Factories;

// use App\Models\Quiz;
// use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
//  */
// class QuizFactory extends Factory
// {
//     protected $model = Quiz::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             'name' => $this->faker->sentence,
//         ];
//     }
// }


namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    protected $model = Quiz::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word() . 'クイズ',
        ];
    }

    // 質問と選択肢も一緒に生成する
    public function configure()
    {
        return $this->afterCreating(function (Quiz $quiz) {
            // 各クイズに3つの質問を追加
            for ($i = 0; $i < 3; $i++) {
                $question = $quiz->questions()->create([
                    'text' => $this->faker->sentence(),
                    'image' => '', // ダミーの場合は空のままにします
                    'supplement' => ''
                ]);

                // 各質問に3つの選択肢を追加
                for ($j = 0; $j < 3; $j++) {
                    $question->choices()->create([
                        'text' => $this->faker->word(),
                        'is_correct' => $j === 0, // 最初の選択肢を正解に設定
                    ]);
                }
            }
        });
    }
}

