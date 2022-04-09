<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

public function definition() {
       return [
        'author_id' => \App\Models\User::factory(),
        'serie_id' => \App\Models\Serie::factory(),
        'content' => this->faker->paragraph($nbSentences = 10, $varaiableNbSentences = true),
        'date' => $this->faker-> date(),
       ];

       

}



}