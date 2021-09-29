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
            'objcommnclearly' => rand(0, 7),
            'inclusion' => rand(5, 7),
            'reviewed' => rand(1, 7),
            'thrknow' => rand(1, 7),
            'subjmat' => rand(1, 7),
            'knowrel' => rand(1, 7),
            'ideaexp' => rand(1, 7),
            'actandqn' => rand(1, 7),
            'praise' => rand(1, 7),
            'poorbehave' => rand(1, 7),
            'fairness' => rand(1, 7),
            'recmiscon' => rand(1, 7),
            'studengaged' => rand(1, 10),
            'timeutil' => rand(1, 10),
            'goodprac' => rand(1, 10),
            'descriptor' => rand(1, 5),
            'comment' => $this->faker->text(100),
            'user_id' => rand(1, 20)        ];
    }
}
