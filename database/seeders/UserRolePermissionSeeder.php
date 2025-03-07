<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tutor;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'view permission']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);


        $superAdminRole = Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $tutorRole = Role::create(['name' => 'tutor']);
        $studentRole = Role::create(['name' => 'student']);

        $allPermissionNames = Permission::pluck('name')->toArray();
        $superAdminRole->givePermissionTo($allPermissionNames);

        $adminRole->givePermissionTo(['create role', 'view role', 'update role']);
        $adminRole->givePermissionTo(['create permission', 'view permission']);
        $adminRole->givePermissionTo(['create user', 'view user', 'update user']);


        $superAdminUser = User::firstOrCreate([
            'email' => 'super@gmail.com',
        ], [
            'name' => 'Super Admin',
            'email' => 'super@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $superAdminUser->assignRole($superAdminRole);


        $adminUser = User::firstOrCreate([
            'email' => 'admin@gmail.com'
        ], [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $adminUser->assignRole($adminRole);


        $tutor = User::firstOrCreate([
            'email' => 'tutor@gmail.com',
        ], [
            'name' => 'Tutor',
            'email' => 'tutor@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $tutor->assignRole($tutorRole);

        Tutor::firstOrCreate([
            'user_id' => $tutor->id,
        ], [
            'user_id' => $tutor->id,
        ]);

        $student = User::firstOrCreate([
            'email' => 'student@gmail.com',
        ], [
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $student->assignRole($studentRole);

        Student::firstOrCreate([
            'user_id' => $student->id,
        ], [
            'user_id' => $student->id,
        ]);
    }
}
