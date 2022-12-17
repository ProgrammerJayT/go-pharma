<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Go Pharma</title>

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-full">
        @include('partials.navbar')
        @include('partials.header')

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

@livewireScripts
<script type="module">
    import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
</script>

<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
    data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>


</html>
