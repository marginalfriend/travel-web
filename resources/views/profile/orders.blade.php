<x-app-layout>
    <div class="flex flex-col gap-6 min-h-screen p-20 pt-24">
        <h1 class="text-3xl font-bold">Orders</h1>
        <div class="rounded-lg">
            <table class="border w-full rounded-lg">
                <thead>
                    <tr>
                        <th scope="col" class="p-4 border bg-gray-200">Nama tempat</th>
                        <th scope="col" class="p-4 border bg-gray-200">Total Pengunjung</th>
                        <th scope="col" class="p-4 border bg-gray-200">Total HTM</th>
                        <th scope="col" class="p-4 border bg-gray-200">Tanggal Kunjungan</th>
                        <th scope="col" class="p-4 border bg-gray-200">Konfirmasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td class="p-4 border">{{ $order->destination->name }}</td>
                            <td class="p-4 border">{{ $order->adult_visitor + $order->child_visitor }}</td>
                            <td class="p-4 border">
                                {{ $order->adult_visitor * $order->destination->adult_price + $order->child_visitor * $order->destination->child_price }}
                            </td>
                            <td class="p-4 border">{{ $order->visit_date }}</td>
                            <td class="p-4 border">{{ $order->is_paid }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
