<x-app-layout>
    <div class="min-h-screen p-20">
        <h1 class="text-3xl font-bold">Orders</h1>
        <table class="border w-full">
            <thead>
                <tr>
                    <th>Nama tempat</th>
                    <th>Total Pengunjung</th>
                    <th>Total HTM</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Konfirmasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->destination->name }}</td>
                        <td>{{ $order->adult_visitor + $order->child_visitor }}</td>
                        <td>{{ ($order->adult_visitor * $order->destination->adult_price) + ($order->child_visitor  * $order->destination->child_price) }}</td>
                        <td>{{ $order->visit_date }}</td>
                        <td>{{ $order->is_paid }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
