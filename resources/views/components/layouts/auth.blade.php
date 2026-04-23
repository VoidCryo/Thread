<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'auth' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-background md:min-h-screen">
    <main class="md:min-h-screen md:grid md:grid-cols-2">
        <div>

        </div>
        <div {{ $attributes->merge(["class" => "py-3.5 px-4 md:py-65 md:px-20"]); }}>
        {{ $slot }}
        </div>
    </main>
    </body>
</html>
