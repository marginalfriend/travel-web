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
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ $destination->getImageUrlAttribute() }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $destination->category->name }}
                    </h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $destination->name }}</h1>
                    <div class="flex">
                        <div class="flex flex-col justify-start mb-5">
                            <span class="title-font font-thin text-md text-gray-500">HTM Dewasa : Rp.
                                {{ $destination->adult_price }}</span>
                            <span class="title-font font-thin text-md text-gray-500">HTM Anak-anak : Rp.
                                {{ $destination->child_price }}</span>
                        </div>
                        <button
                            class="flex ml-auto text-white bg-sky-500 border-0 h-min py-2 px-6 focus:outline-none hover:bg-sky-600 rounded">
                            Pesan Tiket
                        </button>
                    </div>
                    <p class="leading-relaxed">{{ $destination->description }}</p>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</body>

</html>
