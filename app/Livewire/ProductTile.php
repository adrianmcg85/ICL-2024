<?php

namespace App\Livewire;

use Livewire\Component;

class ProductTile extends Component
{
    public $data;
    public function mount()
    {
        return view('livewire.product-tile', ['data' => $this->data]);
    }
}
