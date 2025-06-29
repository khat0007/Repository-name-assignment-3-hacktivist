<!-- resources/views/orders/index.blade.php -->

<x-app-layout>
    <h1>Your Orders</h1>

    @if($orders->isEmpty())
        <p>You have no orders.</p>
    @else
        <ul>
            @foreach($orders as $order)
                <li>
                    <a href="{{ route('orders.show', $order->id) }}">
                        Order #{{ $order->id }} - {{ $order->created_at }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</x-app-layout>
