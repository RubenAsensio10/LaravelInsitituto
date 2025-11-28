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
                <thead class="text-gray-600">
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>f_nac</th>
                        <th>email</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alumnos as $alumno)
                        <tr class="hover:bg-gray-50">
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }} {{ $alumno->apellidos }}</td>
                            <td>{{ $alumno->f_nac->format('Y-m-d') }}</td>
                            <td class="text-cyan-500">{{ $alumno->email }}</td>
                            <td>
                                <a href="{{ route('alumnos.edit', $alumno) }}" class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" onsubmit="return confirm('¿Eliminar alumno?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-500 hover:text-red-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('alumnos.show', $alumno) }}" class="text-gray-500 hover:text-blue-600">Ver</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No hay alumnos registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.layout>
