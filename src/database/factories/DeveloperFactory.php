<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperFactory extends Factory{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Developer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'nome' => $this->faker->name(),
            'sexo' => $this->faker->sentence(1),
            'idade' => $this->faker->numberBetween(15, 99),
            'hobby' => $this->faker->sentence(),
            'datanascimento' => $this->faker->date(),
        ];
    }
}
