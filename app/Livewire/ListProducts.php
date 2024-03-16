<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ListProducts extends Component
{
    #[Layout('layouts.main')]
    public function render()
    {
        return view('livewire.list-products');
    }
}
