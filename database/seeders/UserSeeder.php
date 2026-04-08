<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kodeJurusan = '55201';
        $angkatanList = ['21', '22', '23', '24', '25'];
        $urut = 1;

        for ($i = 0; $i < 50; $i++) {
            $angkatan = $angkatanList[array_rand($angkatanList)];
            $npm = $kodeJurusan . $angkatan . str_pad($urut, 3, '0', STR_PAD_LEFT);

            DB::table('users')->insert([
                'npm' => $npm,
                'username' => $faker->unique()->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $urut++;
        }
    }
}
