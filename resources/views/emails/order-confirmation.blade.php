@component('mail::message')
Hey {{ $order->user->name }},

Thank you for your order. You will find all details below.

<table style="width:100%">
    <thead>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->items as $item)
            <tr>
                <td><strong>{{ $item->name }}</strong> <br> {{ $item->description }} </td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
                <td style="text-align:right">{{ $item->amount_total }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        @if ($order->amount_shipping->isPositive())
            <tr>
                <th colspan="3" style="text-align:right">Shipping costs</th>
                <td>{{ $order->amount_shipping }}</td>
            </tr>
        @endif
        @if ($order->amount_discount->isPositive())
            <tr>
                <th colspan="3" style="text-align:right">Discount</th>
                <td>{{ $order->amount_discount }}</td>
            </tr>
        @endif
        @if ($order->amount_tax->isPositive())
            <tr>
                <th colspan="3" style="text-align:right">Tax</th>
                <td>{{ $order->amount_tax }}</td>
            </tr>
        @endif
        @if ($order->amount_subtotal->isPositive())
            <tr>
                <th colspan="3" style="text-align:right">Subtotal</th>
                <td>{{ $order->amount_subtotal }}</td>
            </tr>
        @endif
        @if ($order->amount_total->isPositive())
            <tr>
                <th colspan="3" style="text-align:right">Total</th>
                <td>{{ $order->amount_total }}</td>
            </tr>
        @endif
    </tfoot>
</table>
@component('mail::button', ['url' => route('view-order', $order->id), 'color' => 'success'])
View Order
@endcomponent
@endcomponent