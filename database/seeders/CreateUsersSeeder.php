<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'User',
                'username' => 'rival',
                'email' => 'user@gmail.com',
                'password' => bcrypt('rivaldi'),
                'photo' => 'image.png',
                'roles_id' => 2
            ],
            [
                'name' => 'Admin',
                'username' => 'rivaldi',
                'email' => 'rivaldi@gmail.com',
                'password' => bcrypt('rivaldi'),
                'photo' => 'images.png',
                'roles_id' => 1 
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
