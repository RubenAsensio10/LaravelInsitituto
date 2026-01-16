<x-layouts.layout>
    <div class="p-6">
        
        <div class="flex gap-2 mb-6">
            <a href="{{ route('alumnos.create') }}" class="btn btn-success btn-sm">Crear alumno</a>
            <a href="{{ route('dashboard') }}" class="btn btn-warning btn-sm">Volver</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>F. Nacimiento</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }} {{ $alumno->apellidos }}</td>
                            <td>{{ $alumno->f_nac->format('Y-m-d') }}</td>
                            <td>{{ $alumno->email }}</td>
                            <td class="flex gap-2">
                                <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-warning btn-xs">Editar</a>
                                <a href="{{ route('alumnos.show', $alumno) }}" class="btn btn-info btn-xs">Ver</a>
                                <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" onsubmit="return confirm('¿Eliminar alumno?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-error btn-xs">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay alumnos registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
    </div>
</x-layouts.layout>
