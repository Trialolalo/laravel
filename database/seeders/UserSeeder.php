<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Nuria", 
                "email" => "nuriabonelquesada@gmail.com",
                "password" => "$2y$12\$Vgs//f/4Hn7cUeWGiyfnY.d4gS5WgrpvbukHHlTMveZGARYjAMkjS"
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
