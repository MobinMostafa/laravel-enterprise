@php
   $navLinks = [
        ['name' => 'Home', 'route' => 'home'],
        ['name' => 'About', 'route' => 'about'],
        ['name' => 'Contact', 'route' => 'contact'],
        ['name' => 'Login', 'route' => 'login'],
    ];

@endphp

    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            @foreach ($navLinks as $link)

            <a href="{{ route($link['route'])  }}" @class([
                   'text-lg font-semibold transition-colors duration-200',
                   'text-yellow-400 underline underline-offset-8' => request()->routeIs($link['route']),
                   'text-white hover:text-gray-300' => ! request()->routeIs($link['route']),
               ])>{{ $link['name'] }}</a>
             @endforeach
        </div>
    </nav>

