<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'username' => 'admin',
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2a$12$Iyjq0sUsK.D.u1xE4ER3xeAb1YkjSvpqD0sU/OLxmx3vLyN5Gcp.2', // password
            'status_code' => 8,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
