<?php

namespace Database\Factories;

use App\Models\Acudientes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AcudientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Acudientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_acudiente' => $this->faker->name,
            'dir_acudiente' => $this->faker->address,
            'tel_acudiente' => $this->faker->buildingNumber, // password
            'cor_acudiente' => $this->faker->unique()->safeEmail,
        ];
    }
}
