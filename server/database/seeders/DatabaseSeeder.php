<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(BooksDetailsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(PublishersTableSeeder::class);
    }
}
