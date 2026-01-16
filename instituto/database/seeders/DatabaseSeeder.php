<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Roles
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'teacher']);
        Role::firstOrCreate(['name' => 'student']);

        // Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@instituto.com'],
            ['name' => 'Administrador', 'password' => Hash::make('password')]
        );
        $admin->assignRole('admin');

        // Profesor
        $teacher = User::firstOrCreate(
            ['email' => 'profesor@instituto.com'],
            ['name' => 'Profesor', 'password' => Hash::make('password')]
        );
        $teacher->assignRole('teacher');

        // Estudiantes
        $student = User::firstOrCreate(
            ['email' => 'estudiante1@instituto.com'],
            ['name' => 'Estudiante', 'password' => Hash::make('password')]
        );
        $student->assignRole('student');

        $student2 = User::firstOrCreate(
            ['email' => 'estudiante2@instituto.com'],
            ['name' => 'Estudiante 2', 'password' => Hash::make('password')]
        );
        $student2->assignRole('student');

        $student3 = User::firstOrCreate(
            ['email' => 'estudiante3@instituto.com'],
            ['name' => 'Estudiante 3', 'password' => Hash::make('password')]
        );
        $student3->assignRole('student');
    }
}
