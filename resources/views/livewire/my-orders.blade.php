<x-panel class="max-w-lg mx-auto mt-12" title="My Orders">
    <table class="w-full">
        <thead>
            <tr>
                <th class="text-left">Order</th>
                <th class="text-left">Ordered at</th>
                <th class="text-right">Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->orders as $order)
                <tr>
                    <td>
                        <a wire:navigate href="{{ route('view-order', $order->id) }}" class="underline font-medium">#{{ $order->id }}</a>
                    </td>
                    <td>{{ $order->created_at->diffForHumans() }}</td>
                    <td class="text-right">{{ $order->amount_total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-panel>