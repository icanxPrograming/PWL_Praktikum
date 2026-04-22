<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReturnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $loanDetails = DB::table('loan_detail')->pluck('id');

        foreach ($loanDetails as $detailId) {

            if ($faker->boolean(60)) {

                $charge = $faker->boolean(30);

                DB::table('returns')->insert([
                    'loan_detail_id' => $detailId,
                    'charge' => $charge,
                    'amount' => $charge ? $faker->numberBetween(5000, 50000) : 0,
                ]);

                DB::table('loan_detail')
                    ->where('id', $detailId)
                    ->update([
                        'is_return' => true,
                    ]);
            }
        }
    }
}