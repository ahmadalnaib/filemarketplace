<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{

    public Product $product;
    public function render()
    {
        return view('livewire.edit-product');
    }
}
