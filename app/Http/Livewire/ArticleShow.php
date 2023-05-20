<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleShow extends Component
{

    /**si estamos usando php 7.4 o superior podemos usar modelos de eloquent como propiedades
     * de livewire en la propiedad $articles le decimos que el tipo de datos de esa
     * propiedad es el modelo Article
     * lo que ganamos con este tipado de la propiedad es que livewire automaticamente
     * va a aplicar el route model binding sin necesiodad de definir el metodo mount()
     * 
     * 
     */

    public Article $article;

    // public function mount($article)
    // {
    //     $this->article = Article::findOrFail($article);
    // }

    /** estamos usando route model binding como si fuera un controlador
     * 
     * 
     */

    // public function mount(Article $article)
    // {
    //     $this->article = $article;
    // }

    public function render()
    {
        // return view('livewire.article-show', [
        //    'article' => Article::find(request()->route('article'))
        // ]);
        return view('livewire.article-show');
    }
}
