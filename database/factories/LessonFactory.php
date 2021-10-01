<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'class' => rand(1, 13),
            'objcommnclearly' => rand(0, 10),
            'inclusion' => rand(0, 10),
            'reviewed' => rand(0, 10),
            'thrknow' => rand(0, 10),
            'subjmat' => rand(0, 10),
            'knowrel' => rand(0, 10),
            'ideaexp' => rand(0, 10),
            'actandqn' => rand(0, 10),
            'praise' => rand(0, 10),
            'poorbehave' => rand(0, 10),
            'fairness' => rand(0, 10),
            'recmiscon' => rand(0, 10),
            'studengaged' => rand(0, 10),
            'timeutil' => rand(0, 10),
            'goodprac' => rand(0, 10),
            'descriptor' => rand(0, 5),
            'comment' => $this->faker->text(100),
            'user_id' => rand(1, 20)        ];
    }
}
