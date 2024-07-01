<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	
	@vite('resources/css/app.css')
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="w-[100vw] min-h-[100vh] flex flex-col justify-between align-middle pt-20">
	@include('layouts.header')
	<h1 class="text-center py-6 text-3xl font-semibold">Tempat Wisata</h1>
	<div class="grid grid-cols-3 justify-center align-middle w-full h-full p-20 pt-10 gap-10">
		@foreach ($destinations as $destination)
			<div class="">
				<div class="bg-gray-100 p-6 rounded-lg">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ $destination -> getImageUrlAttribute()}}" alt="content">
					<h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $destination -> category -> name }}</h3>
					<h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $destination -> name }}</h2>
					<a href="{{route('destination.view', ['destination' => $destination])}}">
						<button class="inline-flex items-center bg-sky-700 border-0 py-1 px-4 focus:outline-none hover:bg-sky-500 rounded text-white mt-4 md:mt-0">LIhat
							<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
								<path d="M5 12h14M12 5l7 7-7 7"></path>
							</svg>
						</button>
					</a>
				</div>
			</div>
		@endforeach
	</div>
	@include('layouts.footer')
</body>
</html>