<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BookDetail::factory()
            ->count(100)
            ->create();
    }
}
