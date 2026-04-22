<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookshelfsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('bookshelfs')->insert([
                'code' => strtoupper($faker->bothify('SHF###')),
                'name' => 'Rak ' . $faker->word(),
            ]);
        }
    }
}