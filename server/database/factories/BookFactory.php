<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{

    private static int $sequence = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bookdetail_id' => self::$sequence++,
            'author_id' => $this->faker->numberBetween(1,50),
            'publisher_id' => $this->faker->numberBetween(1,50),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
