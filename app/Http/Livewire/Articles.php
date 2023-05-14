<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Articles extends Component
{
    //public $h1 = 'Listado Articulos'; ejemplo
    
    // public $articles; ejemplo 2

    // public function mount()
    // {
    //     $this->articles = \App\Models\Article::all();
    // }

    public function render()
    {
        // return view('livewire.articles', [
        //     'articles' => \App\Models\Article::all()
        // ])->layout('welcome') esto es sin la carpeta layouts;

        
        return view('livewire.articles', [
            'articles' => \App\Models\Article::all()
        ]);
    }
}
