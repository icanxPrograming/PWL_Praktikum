<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $users = DB::table('users')->pluck('npm');

        foreach ($users as $npm) {

            for ($i = 0; $i < rand(1, 3); $i++) {

                $loanDate = $faker->dateTimeBetween('-2 months', 'now');
                $returnDate = (clone $loanDate)->modify('+7 days');

                DB::table('loans')->insert([
                    'user_npm' => $npm,
                    'loan_at' => $loanDate->format('Y-m-d'),
                    'return_at' => $returnDate->format('Y-m-d'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}