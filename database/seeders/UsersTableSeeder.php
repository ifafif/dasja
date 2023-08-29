<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Jaksa Agung',
            'username'=>'jaksaagung',
            'email'=>'jaksaagung@kejaksaan.go.id',
            'password'=>Hash::make('1234'),
        ]);
    }
}
