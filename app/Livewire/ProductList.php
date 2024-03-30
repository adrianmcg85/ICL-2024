<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $data;
    public function mount()
    {
        return view('livewire.product-list', ['data' => $this->data]);
    }
}
