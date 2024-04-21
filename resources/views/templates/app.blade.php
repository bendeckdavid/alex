<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')  
</head>
<body>
    Hola @yield('name') <br>
    
    @php
        $isAdmin = true
    @endphp

    <div> {{-- Main --}}

    <span @class([
        'p-4',
        'text-green-500' => $isAdmin,
        'text-red-500' => !$isAdmin,
    ])>TEXTO</span>

    </div>



</body>
</html>