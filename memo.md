
php artisan make:migration create_authors_table
php artisan make:migration create_publishers_table
php artisan make:migration create_books_table
php artisan make:migration create_bookdetails_table


php artisan make:seeder AuthorsTableSeeder
php artisan make:seeder PublishersTableSeeder
php artisan make:seeder BooksTableSeeder
php artisan make:seeder BooksDetailsTableSeeder

php artisan make:model Publisher
php artisan make:model Author
php artisan make:model Book
php artisan make:model BookDetail

php artisan make:factory PublisherFactory
php artisan make:factory AuthorFactory
php artisan make:factory BookFactory
php artisan make:factory BookDetailFactory
