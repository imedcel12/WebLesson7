<?php

namespace Database\Factories;

use App\Models\Songs;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Songs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Song_Title' => $this->faker->word,
        'Singer' => $this->faker->word,
        'Genre' => $this->faker->word,
        'Date_Release' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
