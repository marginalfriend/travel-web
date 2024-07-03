<x-app-layout>
    <div class="flex flex-col gap-6 min-h-screen p-20 pt-24">
        <h1 class="text-3xl font-bold">Orders</h1>
        @if (session()->has('success'))
            <div class="w-full p-4 bg-lime-100 rounded">
                {{ session('success') }}
            </div>
        @endif
        <div class="rounded-lg">
            <table class="border w-full rounded-lg">
                <thead>
                    <tr>
                        <th scope="col" class="p-4 border bg-gray-200">Nama tempat</th>
                        <th scope="col" class="p-4 border bg-gray-200">Total Pengunjung</th>
                        <th scope="col" class="p-4 border bg-gray-200">Total HTM</th>
                        <th scope="col" class="p-4 border bg-gray-200">Tanggal Kunjungan</th>
                        <th scope="col" class="p-4 border bg-gray-200">Pembayaran</th>
                        <th scope="col" class="p-4 border bg-gray-200"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td class="p-1 border">{{ $order->destination->name }}</td>
                            <td class="p-1 border text-center">{{ $order->adult_visitor + $order->child_visitor }}</td>
                            <td class="p-1 border text-center">
                                {{ $order->adult_visitor * $order->destination->adult_price + $order->child_visitor * $order->destination->child_price }}
                            </td>
                            <td class="p-1 border text-center">{{ $order->visit_date }}</td>
                            <td class="p-1 border text-center">{{ $order->is_paid ? 'Paid' : 'Pending' }}</td>
                            <td class="p-1 border text-center">
                                @if (!$order->is_paid)
                                    <form method="POST" action="{{ route('order.pay', ['order' => $order]) }}">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="is_paid" value="{{ true }}" />
                                        <button class="bg-sky-700 hover:bg-sky-500 text-white px-2 py-1 rounded-md"
                                            type="submit">Bayar</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
