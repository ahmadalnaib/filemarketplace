<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Middleware\RedirectIfUserHasNotEnabledStripe;

class ProductEditController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth',RedirectIfUserHasNotEnabledStripe::class]);
    }


    public function __invoke(Product $product)
    {
        return view('products.edit',[
            'product'=>$product
        ]);
    }
}
