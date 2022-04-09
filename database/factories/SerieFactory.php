<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
        return [
           'author_id' => \App\Models\User::factory(),
           'title' => $title,
           'content' => $this->faker->paragraph($nbSentences = 10, $variableNbSentences = true),
           'acteurs' => $this->faker->paragraph($nbSentences = 10, $variableNbSentences = true),
           'url' => str_replace('', '-',$title),
           'tags' => $this->faker->words($nb = 3, $asText = true),
           'status' => 'published',

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
                
            ];
        });
    }
}
