<?php

namespace Database\Factories;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnonceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Annonce::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'image' => 'https://img.pizza/600/400',
            'price' => $this->faker->randomNumber(4)
        ];
    }
}
