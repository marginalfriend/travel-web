<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

				@vite('resources/css/app.css')

        <title>Tiketin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased flex flex-col w-[100vw] min-h-[100vh]">
			@include('layouts.header')
			<main class="w-full h-full">
				<div class="flex flex-col justify-between align middle w-full h-[100vh] overflow-x-hidden">
					<div class="flex flex-col justify-center align-middle w-full h-full items-center gap-4">
						<h1 class="text-center text-5xl font-semibold text-white px-40 z-10 text-wrap">Surga Tropis Menanti Anda dengan Pemandangan Eksotis dan Atmosfer Santai</h1>
						<button class="bg-sky-700 hover:bg-sky-500 text-white px-4 py-2 rounded-lg">Pesan Tiket<button/>
					</div>
						<img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="1920" class="absolute h-full w-full -z-50 object-cover" />
					<div class="absolute top-0 w-full h-full bg-black/50 -z-20" />
				</div>
			</main>
			@include('layouts.footer')
    </body>
</html>
