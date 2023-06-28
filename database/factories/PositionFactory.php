<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Position::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jobTitles = [
            'Web Developer',
            'Software Engineer',
            'Data Analyst',
            'IT Consultant',
            'UI/UX Designer',
            'Network Administrator',
            'Cybersecurity Specialist',
            'Database Administrator',
            'System Analyst',
        ];

        return [
            'code' => $this->faker->stateAbbr(),
            'name' => $this->faker->randomElement($jobTitles),
            'description' => $this->faker->sentence(),
        ];
    }
}