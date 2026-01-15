<header class="bg-header h-header text-white flex justify-between items-center">
    <img src="{{asset('./images/logo.png')}}" alt="logo" class="h-17 m-5 max-h-full">
    <h1 class="text-4xl">{{ __('messages.school_management') }}</h1>
    <div class="space-x-2">
        @guest
        <a href="{{ route('login') }}"><button class="bg-white px-4 py-2 rounded-md text-black font-medium">{{ __('messages.login') }}</button></a>
        <a href="{{ route('register') }}"><button class="bg-gray-300 px-6 py-2 rounded-md text-black font-medium">{{ __('messages.register') }}</button></a>
        <select onchange="window.location.href=this.value" class="bg-neutral-600 px-4 py-2 rounded-md text-white mr-4 font-medium border-none">
            <option value="{{ route('lang', 'en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
            <option value="{{ route('lang', 'es') }}" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>Español</option>
            <option value="{{ route('lang', 'fr') }}" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>Français</option>
        </select>
        @endguest
        @auth
        <div class="flex items-center">
            <span class="text-xl text-white mr-5"> {{auth()->user()->name}}</span>
             <select onchange="window.location.href=this.value" class="bg-neutral-600 px-4 py-2 rounded-md text-white mr-4 font-medium border-none">
                <option value="{{ route('lang', 'en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                <option value="{{ route('lang', 'es') }}" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>Español</option>
                <option value="{{ route('lang', 'fr') }}" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>Français</option>
            </select>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" name="logout" value="{{ __('messages.logout') }}" class="bg-gray-300 px-6 py-2 rounded-md text-black font-medium mr-5">
            </form>
        </div>
        @endauth
    </div>

</header>