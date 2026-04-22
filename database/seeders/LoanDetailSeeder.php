<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LoanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $loans = DB::table('loans')->pluck('id');
        $books = DB::table('books')->pluck('id');

        foreach ($loans as $loanId) {

            $bookCount = rand(1, 4);

            $selectedBooks = $faker->randomElements(
                $books->toArray(),
                $bookCount
            );

            foreach ($selectedBooks as $bookId) {
                DB::table('loan_detail')->insert([
                    'loan_id' => $loanId,
                    'book_id' => $bookId,
                    'is_return' => $faker->boolean(40),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}