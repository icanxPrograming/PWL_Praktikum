<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $bookshelfs = DB::table('bookshelfs')->pluck('id');
        $categories = DB::table('categories')->pluck('id');

        for ($i = 0; $i < 20; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'publisher' => $faker->company(),
                'city' => $faker->city(),
                'cover' => 'default.jpg',
                'bookshelf_id' => $faker->randomElement($bookshelfs->toArray()),
                'category_id' => $faker->randomElement($categories->toArray()),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}