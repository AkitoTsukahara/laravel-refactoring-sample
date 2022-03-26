<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Book::factory()
            ->count(100)
            ->create();
    }
}
