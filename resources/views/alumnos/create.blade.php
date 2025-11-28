<x-layouts.layout>
    <div class="p-8 max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Nuevo Alumno</h1>

        <form action="{{ route('alumnos.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <div class="form-control">
                <label class="label"><span class="label-text">Nombre</span></label>
                <input type="text" name="nombre" class="input input-bordered" value="{{ old('nombre') }}" required>
                @error('nombre')<span class="text-error text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="form-control">
                <label class="label"><span class="label-text">Apellidos</span></label>
                <input type="text" name="apellidos" class="input input-bordered" value="{{ old('apellidos') }}" required>
                @error('apellidos')<span class="text-error text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="form-control">
                <label class="label"><span class="label-text">Email</span></label>
                <input type="email" name="email" class="input input-bordered" value="{{ old('email') }}" required>
                @error('email')<span class="text-error text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="form-control">
                <label class="label"><span class="label-text">Fecha de Nacimiento</span></label>
                <input type="date" name="f_nac" class="input input-bordered" value="{{ old('f_nac') }}" required>
                @error('f_nac')<span class="text-error text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="flex gap-2 mt-6">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('alumnos.index') }}" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.layout>
