<div class="grid grid-cols-4 gap-4 mt-12">
    @foreach ($this->products as $product)

        <x-panel>
            <a href="{{ route('product', $product) }}" class="absolute w-full h-full"></a>
            <img src="{{ $product->image->path }}" alt="">
            <h1 class="font-medium text-lg">
                {{ $product->name }}
            </h1>
            <span class="text-gray-700 text-sm">
                {{ $product->price }}
            </span>
        </x-panel>

    @endforeach
</div>