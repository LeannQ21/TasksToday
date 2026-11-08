<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'pastryowner',
            'full_name' => 'Leann Marie Querubin',
            'email' => 'pastryowner@example.com',
        ]);
    }
}