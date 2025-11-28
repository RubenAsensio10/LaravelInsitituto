<x-layouts.layout>
<div
  class="hero h-full"
  style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
>
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-lg">
      <h1 class="mb-5 text-5xl font-bold italic text-orange-400">Aprendiendo<br>Laravel</h1>
      <p class="mb-2 text-gray-300">
        Aplicacion para aprender Laravel
      </p>
      <div class="divider divider-neutral my-4"></div>
      <p class="mb-5 text-gray-400">
        Registrate para acceder a las opciones
      </p>
      <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </div>
  </div>
</div>
</x-layouts.layout>
