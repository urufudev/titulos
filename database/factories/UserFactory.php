<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'ap_paterno' => $this->faker->name,
            'ap_materno' => $this->faker->name,
            'dni' => $this->faker->numberBetween($min = 10000000, $max = 99999999),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$74dgeDqf73v19INP7akVj.1LPgHov/2DM/eYchRbCo97QD2Zwz6yy', // password
            'remember_token' => Str::random(10),
            
        ];
    }
}
