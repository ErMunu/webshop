<div class="mt-12">
    <div class="flex justify-between">
        <h1 class="text-xl font-medium">Our Products</h1>
        <div>
            <x-input wire:model.live="keywords" type="search" class="text-center" placeholder="Search"></x-input>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-12">
        @foreach ($this->products as $product)

            <a wire:navigate href="{{ route('product', $product) }}">
                <x-panel>
                    <img src="{{ $product->image->path }}" alt="">
                    <h1 class="font-medium text-lg">
                        {{ $product->name }}
                    </h1>
                    <span class="text-gray-700 text-sm">
                        {{ $product->price }}
                    </span>
                </x-panel>
            </a>

        @endforeach
    </div>
    <div>
        {{ $this->products->links() }}
    </div>
</div>