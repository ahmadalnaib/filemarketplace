<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

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

    public function updatedStateTitle($title)
    {
       $this->state['slug']=Str::slug($title);
    }
    public function render()
    {
        return view('livewire.create-product');
    }
}
