<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apex Scrap</title>

    {{-- DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    {{-- Tailwind CSS --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('/frontend/style.css') }}">

</head>

<body>
    <header>
        {{-- Language Switch --}}
        <div class="flex justify-end gap-2 mb-6">
            <a href="{{ route('lang.switch', 'en') }}" class="text-blue-600 hover:underline">English</a> |
            <a href="{{ route('lang.switch', 'zh') }}" class="text-blue-600 hover:underline">中文</a>
        </div>
    </header>

    <main>

        <div class="">
            @yield('content')
        </div>
    </main>


    <footer>

    </footer>
</body>

</html>
