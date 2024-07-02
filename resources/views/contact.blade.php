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
    <main class="w-full h-[100vh]">
			<div class="flex flex-col h-full w-full">
				<div class="flex h-[50vh] w-full justify-center align-middle">
					<h1 class="text-5xl font-bold text-center mt-40 text-white">CONTACT</h1>
					<img src="https://wallpapersmug.com/download/2048x1152/829e7b/sea-coast-sunset.jpg"
					width="1920" class="absolute h-[50%] w-full -z-50 object-cover" />
				</div>
				<div class="grid grid-cols-3 w-full pt-10 px-10 gap-5">
					<div class="flex flex-col gap-3 border rounded-lg py-5 px-0 shadow">
						<h2 class="text-2xl font-semibold text-center">Jam Operasional</h2>
						<p class="text-center font-thin">9.00 - 17.00 Senin - Minggu</p>
					</div>
					<div class="flex flex-col gap-3 border rounded-lg py-5 px-0 shadow">
						<h2 class="text-2xl font-semibold text-center">Whatsapp</h2>
						<p class="text-center font-thin">+62 - 8123 - 4567 - 8910</p>
					</div>
					<div class="flex flex-col gap-3 border rounded-lg py-5 px-0 shadow">
						<h2 class="text-2xl font-semibold text-center">General Inquiries</h2>
						<p class="text-center font-thin">admin@tiketin.com</p>
					</div>
				</div>
				<div class="flex flex-col w-full pt-10">
					<h3 class="text-center font-thin text-lg">Customer service kita akan melayani anda. Pesan akan direspon selambat-lambatnya 1x24 jam.</h3>
				</div>
			</div>
    </main>
    @include('layouts.footer')
</body>

</html>