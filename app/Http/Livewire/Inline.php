<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Inline extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- The Master doesn't talk, he acts. --}}
                Inline
            </div>
        blade;
    }
}
