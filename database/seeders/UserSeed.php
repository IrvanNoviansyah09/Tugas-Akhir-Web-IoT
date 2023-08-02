<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name'=>'Admin 1',
            'level'=>'Admin',
            'email'=>'admin01@gmail.com',
            'password'=>bcrypt('12345'),
            'remember_token'=> Str::random(60),
        ]);
    }
}
