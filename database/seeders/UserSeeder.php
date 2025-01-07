<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tutor;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = generateFaker();
        $password = Hash::make('12345');
        
        $superUserExists = User::where('email', 'super@skylarksoft.com')->exists();
        
        if (!$superUserExists) {
            User::create([
                'name' => "Super Admin",
                'email' => "super@skylarksoft.com",
                'role' => 0,
                'image' => null,
                'password' => $password,
            ]);
        }
        
        for ($i = 1; $i <= 3; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'role' => 1,
                'image' => $faker->imageUrl(640, 480),
                'password' => $password,
            ]);
            
            Tutor::create([
                'user_id' => $user->id,
            ]);
        }
        
        for ($i = 1; $i <= 3; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'role' => 2,
                'image' => $faker->imageUrl(640, 480),
                'password' => $password,
            ]);
            
            Student::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
