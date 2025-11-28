<x-layouts.layout>
    <div class="p-8">
        
        <!-- Badge del rol del usuario actual -->
        <div class="mb-6">
            <span class="text-gray-600">Tu rol: </span>
            @role('admin')
                <span class="badge badge-error">Administrador</span>
            @endrole
            @role('teacher')
                <span class="badge badge-warning">Profesor</span>
            @endrole
            @role('student')
                <span class="badge badge-info">Estudiante</span>
            @endrole
        </div>

        <!-- Tarjeta CRUD Alumnos -->
        <div class="card w-72 bg-base-200 shadow-xl image-full">
            <figure>
                <img src="{{ asset('images/ninos.png') }}" alt="CRUD Alumnos" />
            </figure>
            <div class="card-body">
                <h2 class="card-title text-white">CRUD Alumnos!</h2>
                <p class="text-gray-200">Gestionamos Altas bajas actualizaciones y borrado de una tabla de alumnos</p>
                <div class="card-actions">
                    <a href="{{ route('alumnos.index') }}" class="btn btn-primary btn-sm">Ver alumnos</a>
                </div>
            </div>
        </div>
        
    </div>
</x-layouts.layout>
