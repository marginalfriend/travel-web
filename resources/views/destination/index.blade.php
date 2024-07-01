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
<body class="w-[100vw] min-h-[100vh]">
	<div class="grid grid-cols-3 justify-center align-middle w-full h-full p-20 gap-10">
		@foreach ($destinations as $destination)
			<div class="">
				<div class="bg-gray-100 p-6 rounded-lg">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ $destination -> getImageUrlAttribute()}}" alt="content">
					<h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $destination -> category -> name }}</h3>
					<h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $destination -> name }}</h2>
					<p class="leading-relaxed text-base">{{ $destination -> description}}</p>
				</div>
			</div>
		@endforeach
	</div>
</body>
</html>