<?php

namespace App\Livewire;

use Livewire\Component;

class ProductProfile extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.product-profile', ['data' => $this->data]);
    }
}
