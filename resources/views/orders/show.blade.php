<x-app-layout>
    <h1>Order #{{ $order->id }}</h1>

    <p><strong>Created At:</strong> {{ $order->created_at }}</p>
    <p><strong>Status:</strong> {{ $order->status ?? 'N/A' }}</p>
    <p><strong>Total:</strong> ${{ $order->total ?? '0.00' }}</p>

    <!-- Add more order details here as needed -->

    <a href="{{ route('orders.index') }}">← Back to Orders</a>
</x-app-layout>
