<x-layouts.layout>
    <div class="p-8 max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Detalle del Alumno</h1>
        
        <div class="bg-white shadow rounded-lg p-6">
            <div class="mb-4">
                <span class="font-semibold">Nombre:</span> {{ $alumno->nombre }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Apellidos:</span> {{ $alumno->apellidos }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Email:</span> {{ $alumno->email }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Fecha de Nacimiento:</span> {{ $alumno->f_nac->format('d/m/Y') }}
            </div>
        </div>
        
        <div class="mt-6">
            <a href="{{ route('alumnos.index') }}" class="btn btn-warning">Volver</a>
        </div>
    </div>
</x-layouts.layout>
