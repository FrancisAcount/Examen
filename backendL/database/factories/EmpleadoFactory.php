<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'nombre' => $this->faker->firstName,
        'apellido' => $this->faker->lastName,
        'correo' => $this->faker->unique()->safeEmail,
        'salario' => $this->faker->randomFloat(2, 8000, 20000),
        ];
    }
}
