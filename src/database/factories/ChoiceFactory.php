<?php

// namespace Database\Factories;

// use App\Models\Choice;
// use App\Models\Question;
// use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Choice>
//  */
// class ChoiceFactory extends Factory
// {
//     protected $model = Choice::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             'text' => $this->faker->word,
//             'is_correct' => $this->faker->boolean,  // 正解かどうかをランダムに設定
//             'question_id' => Question::factory(),  // 関連する質問を自動生成
//         ];
//     }
// }


namespace Database\Factories;

use App\Models\Choice;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChoiceFactory extends Factory
{
    protected $model = Choice::class;

    public function definition()
    {
        return [
            'text' => $this->faker->word(),
            'is_correct' => $this->faker->boolean(), // ダミーのデータを生成
        ];
    }
}
