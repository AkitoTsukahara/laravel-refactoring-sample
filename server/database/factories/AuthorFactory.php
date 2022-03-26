<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{

    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');
        return [
            'name' => $faker->name,
            'kana' => $faker->kanaName,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
