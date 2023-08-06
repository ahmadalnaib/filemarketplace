<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateProduct extends Component
{
    public $state=[
        'title'=>null,
        'slug'=>null,
        'description'=>null,
        'price'=>'0.00',
        'live'=>false

    ];


    public function submit()
    {
       dd('submit'); 
    }
    public function render()
    {
        return view('livewire.create-product');
    }
}
