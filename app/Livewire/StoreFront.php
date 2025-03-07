<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class StoreFront extends Component
{
    use WithPagination;

    #[Url]
    public $keywords;

    #[Computed]
    public function products()
    {
        return Product::query()
            ->when($this->keywords, function ($query) {
                $this->resetPage();
                return $query->where("name", "like", "%{$this->keywords}%");
            })
            ->paginate(2);
    }
    public function render()
    {
        return view('livewire.store-front');
    }
}
