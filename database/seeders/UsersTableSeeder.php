<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'super admin',
            'email' => 'superadmin@nusia.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Anda dapat mengganti 'password' dengan kata sandi yang diinginkan
            'country_of_origin' => 'Indonesia', // Ganti 'Nama Negara' dengan negara asal yang diinginkan atau kosongkan jika tidak ada
            'role' => 'super_admin', // Ganti 'Nama Negara' dengan negara asal yang diinginkan atau kosongkan jika tidak ada
            // 'remember_token' => Str::random(10),
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@nusia.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Anda dapat mengganti 'password' dengan kata sandi yang diinginkan
            'country_of_origin' => 'Indonesia', // Ganti 'Nama Negara' dengan negara asal yang diinginkan atau kosongkan jika tidak ada
            'role' => 'admin', // Ganti 'Nama Negara' dengan negara asal yang diinginkan atau kosongkan jika tidak ada
            // 'remember_token' => Str::random(10),
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@nusia.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Anda dapat mengganti 'password' dengan kata sandi yang diinginkan
            'country_of_origin' => 'Indonesia', // Ganti 'Nama Negara' dengan negara asal yang diinginkan atau kosongkan jika tidak ada
            'role' => 'user',
            // 'remember_token' => Str::random(10),
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);
    }
}
