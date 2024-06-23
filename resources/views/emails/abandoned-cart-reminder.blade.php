@component('mail::message')
Hey {{ $cart->user->name }},

You still have items in your cart. Click the button below if you want to continue continue your checkout.

@component('mail::button', ['url' => route('cart'), 'color' => 'success'])
Continue Checkout
@endcomponent
@endcomponent