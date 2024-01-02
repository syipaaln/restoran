<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin123',
                'email' => 'admin123@gmail.com',
                'role' => 1,
                'password' => Hash::make('12345678'), // Menggunakan Hash::make() untuk mengenkripsi kata sandi
            ],
            [
                'name' => 'pembeli',
                'email' => 'pembeli@gmail.com',
                'role' => 0,
                'password' => Hash::make('12345678'), // Menggunakan Hash::make() untuk mengenkripsi kata sandi
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}