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
        Permission::create(['name' => 'View Role']);
        Permission::create(['name' => 'Create Role']);
        Permission::create(['name' => 'Update Role']);
        Permission::create(['name' => 'Delete Role']);

        Permission::create(['name' => 'View Permission']);
        Permission::create(['name' => 'Create Permission']);
        Permission::create(['name' => 'Update Permission']);
        Permission::create(['name' => 'Delete Permission']);

        Permission::create(['name' => 'View User']);
        Permission::create(['name' => 'Create User']);
        Permission::create(['name' => 'Update User']);
        Permission::create(['name' => 'Delete User']);


        $superAdminRole = Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $tutorRole = Role::create(['name' => 'tutor']);
        $studentRole = Role::create(['name' => 'student']);

        $allPermissionNames = Permission::pluck('name')->toArray();
        $superAdminRole->givePermissionTo($allPermissionNames);

        $adminRole->givePermissionTo(['Create Role', 'View Role', 'Update Role']);
        $adminRole->givePermissionTo(['Create Permission', 'View Permission']);
        $adminRole->givePermissionTo(['Create User', 'View User', 'Update User']);


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
