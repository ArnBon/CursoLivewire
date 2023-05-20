<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class Articles extends Component
{
    public $search = '';
    //  public $category = 'aprendible';
    // public $one = '';
    // public $two = '';
    // public array $category2 = [
    //     'name' => ''
    // ];

    // public $tags = [];
    // public $tags2 = [];

    // public $show = false;


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

        
        // return view('livewire.articles', [
        //     'articles' => \App\Models\Article::all()
        // ]);

        return view('livewire.articles', [
            'articles' => Article::where('title', 'like', "%{$this->search}%")->latest()->get()
        ]);
    }
}
