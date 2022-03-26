<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookDetailFactory extends Factory
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
            'book_id' => self::$sequence++,
            'name' => $this->faker->colorName . '本',
            'isbn' => $this->faker->isbn13(),
            'published_date' => $this->faker->date,
            'price' => $this->faker->randomDigitNotNull,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
