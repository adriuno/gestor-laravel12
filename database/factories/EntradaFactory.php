<?php

namespace Database\Factories;

use App\Models\Entrada;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrada>
 */
class EntradaFactory extends Factory
{
    protected $model = Entrada::class;
    /**
     * Define the model's default state.
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'contenido' => $this->faker->text(80),
            'tag' => $this->faker->word(),
            'user_id' => User::inRandomOrder()->first()->id, // para coger un ID aleatorio
            'imagen' => $this->faker->word,

        ];
    }
}
