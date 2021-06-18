<?php

namespace Database\Factories;

use App\Models\QuestionType;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = QuestionType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => random_int(1,10) * 10,
            'name' => $this->faker->words(1,true)
        ];
    }
}
