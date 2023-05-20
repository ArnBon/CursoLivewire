<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{
    public $title;
    public $content;


    public function render()
    {
        return view('livewire.article-form');
    }

    protected $rules = [
        'title' => ['required', 'min:4'],
        'content' => ['required'],
    ];

    /**
     * implementar la validacion en tiempo real
     * vamos a utiliazr un metodo oldhook llamado updated()
     *  este es un metodo reservado que se va a ejecutar
     * cada vez que una propiedad de este componente se actualizace
     * desde wire:model no se va a ejecutar si se modifica una
     * propiedad dentro de php 
     * 
     * 
     */

     public function updated($propertyName)
     {
        $this->validateOnly($propertyName);
     }

    public function save()
    {
        /*$this->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);


        $article = new Article;
        $article->title = $this->title;
        $article->content = $this->content;
        $article->save();
               
        session()->flash('status', 'Articulo creado');
        $this->redirectRoute('articles.index');*/

        /*existe una forma de evitar tener quer setear uno a uno los atributos
        del modelo ya que este metodo validate() al igual que el metodo nativo de
        laravel validate() devuelve un array unicamente con los datos validados
        por lo que podemos crear el modelo directamente Article::create($data) con el 
        metodo create y pasarle los campos ya validados*/ 

        /*Ahora en livewire la forma recomendada para definir las reglas de validacion
        es utilizando la propiedad $rules de ese modo en el metodo save() llamamos al 
        metodo validate() sin parametros
        */

        /*quitamos la variable $data porque la estamos utilizand una sola vez
        no es necesaria*/

        Article::create($this->validate());
        
        session()->flash('status', 'Articulo creado');
        $this->redirectRoute('articles.index');
    }

}
