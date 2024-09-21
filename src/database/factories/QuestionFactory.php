<?php

// namespace Database\Factories;

// use App\Models\Question;
// use App\Models\Quiz;
// use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
//  */
// class QuestionFactory extends Factory
// {
//     protected $model = Question::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             'text' => $this->faker->sentence,
//             'quiz_id' => Quiz::factory(),  // 関連するクイズを自動生成
//         ];
//     }
// // }
// <?php

// namespace Database\Factories;

// use App\Models\Question;
// use App\Models\Quiz;
// use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
//  */
// class QuestionFactory extends Factory
// {
//     protected $model = Question::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             'text' => $this->faker->sentence(),
//             'supplement' => $this->faker->text(),
//             'quiz_id' => Quiz::factory(),  // クイズに紐づける
//         ];
//     }
// }


// <?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        return [
            'text' => $this->faker->sentence(),
            'image' => '', // ダミーの場合は空のままにします
            'supplement' => ''
        ];
    }
}
