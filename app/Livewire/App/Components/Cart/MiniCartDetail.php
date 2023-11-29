<?php

namespace App\Livewire\App\Components\Cart;

use Livewire\Component;

class MiniCartDetail extends Component
{
    public function render()
    {     
         $cartCollection = \Cart::getContent();
        return view('livewire.app.components.cart.mini-cart-detail',compact('cartCollection'));
    }
}
