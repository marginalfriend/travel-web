<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<title>Tiketin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased flex flex-col w-[100vw] min-h-[100vh] overflow-x-hidden">
    @include('layouts.header')
    <main class="w-full h-full">
        <div class="flex flex-col justify-between align middle w-full h-[100vh] overflow-x-hidden">
            <div class="flex flex-col justify-center align-middle w-full h-full items-center gap-4">
                <h1 class="text-center text-5xl font-semibold text-white px-40 z-10 text-wrap">Surga Tropis Menanti Anda
                    dengan Pemandangan Eksotis dan Atmosfer Santai</h1>
                <a href="destination">
                    <button class="bg-sky-700 hover:bg-sky-500 text-white px-4 py-2 rounded-lg">Pesan Tiket<button />
                </a>
            </div>
            <img src="https://wallpapersmug.com/download/2048x1152/829e7b/sea-coast-sunset.jpg"
                width="1920" class="absolute h-full w-full -z-50 object-cover" />
            <div class="absolute top-0 w-full h-full bg-black/50 -z-20" />
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>
