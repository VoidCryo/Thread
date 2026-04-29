<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)')
        if (prefersDark.matches) {
            document.documentElement.classList.add('dark')
        }
        prefersDark.addEventListener('change', (e) => {
            document.documentElement.classList.toggle('dark', e.matches)
        })
    </script>
    <title>{{ $title ?? 'home' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background min-h-screen">
<main class="min-h-screen">
    <div class="">
        {{ $slot }}
    </div>
    <x-scripts.toast />
</main>
</body>
</html>
