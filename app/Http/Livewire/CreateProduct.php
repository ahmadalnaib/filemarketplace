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

    protected $rules=[
        'state.title'=>'required|max:255',
        'state.slug'=>'required|max:255|unique:products,slug',
        'state.description'=>'required',
        'state.price'=>'required|decimal:0,2|min:1',
        'state.live'=>'boolean'

    ];


    public function submit()
    {
        $this->validate();
       
        auth()->user()->products()->create($this->state);
        return redirect()->route('products');
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
