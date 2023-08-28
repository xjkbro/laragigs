<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="p-12 flex justify-between bg-orange-300">
        <a href="/" class="font-bold text-4xl text-white">LaraGigs</a>
        <p class="font-semibold text-orange-700">Hello Job Seeker!</p>
    </nav>
    {{-- Views --}}
    @yield('content')

</body>

</html>
