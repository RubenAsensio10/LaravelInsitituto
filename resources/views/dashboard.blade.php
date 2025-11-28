<x-layouts.layout>
    <div class="p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card w-72 bg-base-200 shadow-xl image-full">
                <figure><img src="{{ asset('images/ninos.png') }}" alt="CRUD Alumnos" /></figure>
                <div class="card-body">
                    <h2 class="card-title text-white">CRUD Alumnos!</h2>
                    <p class="text-gray-200">Gestionamos Altas bajas actualizaciones y borrado de una tabla de alumnos</p>
                    <div class="card-actions justify-start mt-2">
                        <a href="{{ route('alumnos.index') }}" class="btn btn-primary btn-sm">Ver alumnos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
