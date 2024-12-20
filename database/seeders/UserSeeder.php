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
        $password = Hash::make('12345');
        
        User::create([
            'name' => "Super Admin",
            'email' => "super@skylarksoft.com",
            'role' => 0,
            'image' => null,
            'password' => $password,
        ]);
        
        for ($i = 101; $i <= 105; $i++) {
            $user = User::create([
                'name' => "Tutor $i",
                'email' => "tutor$i@gmail.com",
                'role' => 1,
                'image' => null,
                'password' => $password,
            ]);
            
            Tutor::create([
                'user_id' => $user->id,
            ]);
        }
        
        for ($i = 201; $i <= 205; $i++) {
            $user = User::create([
                'name' => "Student $i",
                'email' => "student$i@gmail.com",
                'role' => 2,
                'image' => null,
                'password' => $password,
            ]);
            
            Student::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
