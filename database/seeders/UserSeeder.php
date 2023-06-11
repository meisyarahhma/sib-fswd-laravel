<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Admin
        $user = User::create([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@email.test',
            'password' => Hash::make('password'),
            'phone' => $faker->phoneNumber,
            'address' => 'Semarang',
        ]);

        // Staff
        $user = User::create([
            'role_id' => 2,
            'name' => 'Staff',
            'email' => 'staff@email.test',
            'password' => Hash::make('password'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
        ]);

        // User
        for ($i=0; $i < 10 ; $i++) {
            $role = role::inRandomOrder()->first();

            $user = User::create([
                'role_id' => 3,
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }

    }
}