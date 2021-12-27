<?php

namespace Database\Factories;

use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_cliente' => $this->faker->name,
            'num_documento' => $this->faker->unique()->numerify('##########'),
            'tipo_documento' => $this->faker->numberBetween(1,4)
        ];
    }
}
