<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Author::factory()
            ->count(50)
            ->create();
    }
}
