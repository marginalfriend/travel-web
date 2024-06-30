<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	@foreach ($destinations as $destination)
		<div class="xl:w-1/4 md:w-1/2 p-4">
			<div class="bg-gray-100 p-6 rounded-lg">
				<img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
				<h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
				<h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $destination -> name }}</h2>
				<p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
			</div>
		</div>
	@endforeach
</body>
</html>