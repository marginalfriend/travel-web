<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiketin | {{ $destination->name }}</title>


    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="w-[100vw] min-h-[100vh] flex flex-col justify-between align-middle pt-20">
    @include('layouts.header')
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 pt-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-[70vh] h-64 object-cover object-center rounded"
                    src="{{ $destination->getImageUrlAttribute() }}">
                @if (session()->has('success'))
                    <div>
                        {{ session('success') }}
                    </div>
                @endif
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $destination->category->name }}
                    </h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $destination->name }}</h1>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col justify-start mb-5">
                            <span class="title-font font-thin text-md text-gray-500">HTM Dewasa : Rp.
                                {{ $destination->adult_price }}</span>
                            <span class="title-font font-thin text-md text-gray-500">HTM Anak-anak : Rp.
                                {{ $destination->child_price }}</span>
                        </div>

                        @if (auth()->check())
                            <form action="{{ route('order.create') }}" method="POST">
                                <div class="flex flex-col gap-4 w-full border p-6 rounded-lg">
                                    <h3 class="text-center text-xl font-bold">Pesan Langsung</h3>
                                    @csrf
                                    @method('POST')
                                    <div class="flex flex-col w-full">
                                        <label>Jumlah pengunjung anak - anak</label>
                                        <input name="child_visitor" class="rounded-md" placeholder="0" type="number" title="child visitor" />
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <label>Jumlah pengunjung dewasa</label>
                                        <input name="child_visitor" class="rounded-md" placeholder="0" type="number" title="adult visitor" />
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
                                    <input type="hidden" name="destination_id" value="{{ $destination->id }}" />
                                    <button type="submit"
                                        class="flex text-white bg-sky-500 border-0 h-min w-fit py-2 px-6 focus:outline-none hover:bg-sky-600 rounded">
                                        Pesan Tiket
                                    </button>
                                </div>
                            </form>
                        @else
                            <div class="flex flex-col gap-4 w-full border p-6 rounded-lg">
                                <h3 class="text-center text-xl font-bold">Login untuk memesan</h3>
                            </div>
                        @endif
                        <p class="leading-relaxed">{{ $destination->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</body>

</html>
