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
            'inclusion' => rand(5, 10),
            'reviewed' => rand(4, 10),
            'thrknow' => rand(4, 10),
            'subjmat' => rand(4, 10),
            'knowrel' => rand(4, 10),
            'ideaexp' => rand(4, 10),
            'actandqn' => rand(4, 10),
            'praise' => rand(4, 10),
            'poorbehave' => rand(4, 10),
            'fairness' => rand(4, 10),
            'recmiscon' => rand(4, 10),
            'studengaged' => rand(4, 10),
            'timeutil' => rand(4, 10),
            'goodprac' => rand(4, 10),
            'descriptor' => rand(1, 5),
            'comment' => $this->faker->text(100),
            'user_id' => rand(1, 20)        ];
    }
}
