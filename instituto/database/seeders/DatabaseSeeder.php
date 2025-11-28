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

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Crear roles básicos del sistema
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'teacher']);
        Role::firstOrCreate(['name' => 'student']);

        // 2. Crear Usuario Administrador por defecto
        $admin = User::firstOrCreate(
            ['email' => 'admin@instituto.com'],
            ['name' => 'Administrador', 'password' => Hash::make('password')]
        );
        $admin->assignRole('admin');

        // 3. Crear Usuario Profesor de prueba
        $teacher = User::firstOrCreate(
            ['email' => 'profesor@instituto.com'],
            ['name' => 'Profesor', 'password' => Hash::make('password')]
        );
        $teacher->assignRole('teacher');

        // 4. Crear Usuario Estudiante inicial
        $student = User::firstOrCreate(
            ['email' => 'estudiante1@instituto.com'],
            ['name' => 'Estudiante', 'password' => Hash::make('password')]
        );
        $student->assignRole('student');

        // 5. Crear más estudiantes de prueba
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
