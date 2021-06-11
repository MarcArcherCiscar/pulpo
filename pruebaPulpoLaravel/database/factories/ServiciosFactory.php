<?php

namespace Database\Factories;

use App\Models\Servicios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiciosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo_producto' => Str::random(10),
            'precio' => $this->faker->randomFloat(2, 1, 100 ),
            'unidad_medida' => $this->faker->randomElement(['metro', 'hora','unidad']),
        ];
    }
}
