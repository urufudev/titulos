<?php

namespace Database\Factories;

use App\Models\Year;
use Illuminate\Database\Eloquent\Factories\Factory;

class YearFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Year::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->year($max = 'now'),
            'description' => $this->faker->text(12),
            'status' => ['ACTIVO', 'INACTIVO'][rand(0, 1)],
        ];
    }
}
