<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InlineComponent extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
                Inline component
            </div>
        blade;
    }
}
