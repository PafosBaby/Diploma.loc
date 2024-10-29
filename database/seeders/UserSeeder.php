<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Aleksey",
            'email' => "i@aleksey.ru",
            'password' => Hash::make('123456'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => "Olga",
            'email' => "i@Olga.ru",
            'password' => Hash::make('111111'),
        ]);

        User::create([
            'name' => "Pavel",
            'email' => "i@pavel.ru",
            'password' => Hash::make('000000'),
        ]);
    }
}
