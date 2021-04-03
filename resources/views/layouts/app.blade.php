<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css



    " />

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       <section class="px-2 py-4 mb-4">
        <header class="container mx-auto flex items-center">
            <img src="/images/logo.png" alt="" class="h-20 w-auto">
            <h1 class="font-bold text-xl">Tweety</h1>
        </header>
       </section>

     
       <section class="px-2">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
    
                @if (auth()->check())
                    <div class="lg:w-32">
                        @include('sidebar-links')
                    </div>
                @endif
                
                <div class="flex-1 lg:mx-4 my-3" style="max-width:700px" >
                   
                    @yield('content')
        
                </div>
        
                @if (auth()->check())
                    
                        @include('friend-list')
                    
                @endif
                
        
            </div>
        </main>
    </section>
     
    </div>
</body>
</html>
