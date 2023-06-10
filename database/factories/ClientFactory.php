<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'endereco' => $this->faker->address,
            'telefone' => $this->faker->phoneNumber,
            'observacao' => $this->faker->sentence,
        ];

        // gerar 100 registros com dados fixos
        // return [
        //     'nome' => 'Cliente ' . $this->faker->name(),
        //     'endereco' => 'Endereço ' . $this->faker->address(),
        //     'observacao' => 'Observação ' . $this->faker->text(),
        //     'telefone' => 'Telefone ' . $this->faker->phoneNumber(),
        // ];

        // gerar 100 registros com dados fixos
        // return [
        //     'nome' => 'Cliente ' . $this->faker->name(),
        //     'endereco' => 'Endereço ' . $this->faker->address(),
        //     'observacao' => 'Observação ' . $this->faker->text(),
        //     'telefone' => 'Telefone ' . $this->faker->phoneNumber(),
        // ];






    }
}
