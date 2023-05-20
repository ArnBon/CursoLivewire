<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    {{-- Articles List --}}
    {{-- <h1>{{ $h1 }}</h1> --}}
    <h1>Listado de articulos</h1>
<a href="{{ route('articles.create') }}">Crear</a>

    {{-- <h2>Categoría: {{ $category }}</h2> --}}
    {{-- <h2>>Two: {{ $two }}</h2><br>  --}}
    {{-- <h2>Categoría: @json($category2) </h2> --}}
    {{-- <h2>Categoría: @json ($tags) </h2> --}}
    {{-- <h2>Categoría: @json ($tags2) </h2> --}}
    <input wire:model="search" type="search" placeholder="Buscar...">
    {{-- <input wire:model.debounce.1s="category" type="text" placeholder="Categoría"> --}}
    {{-- <input wire:model.lazy="category" type="text" placeholder="Categoría"> --}}
    {{-- <input wire:model.defer="category" type="text" placeholder="Categoría">
    <input wire:model.defer="one" type="text" placeholder="One">
    <input wire:model="two" type="text" placeholder="Two"> --}}
    {{-- <input wire:model="category2.name" type="text" placeholder="Categoría2"> --}}

    {{-- <label>
        Tag 1
        <input wire:model="tags" type="checkbox" value="tag1">
    </label> --}}

    {{-- <label>
        Tag 2
        <input wire:model="tags"  type="checkbox" value="tag2">
    </label> --}}

    {{-- <select wire:model="tags2" multiple>
        <option value="">Seleccione</option>
        <option value="tag1">Tag 1</option>
        <option value="tag2">Tag 2</option>
    </select> --}}
    


    {{-- <br>

    Mostrar/Ocultar
    <label>
        <input wire:model="show" type="checkbox" value="">
    </label> --}}
    {{-- @if($show) --}}
        <ul>
            @foreach ($articles as $article)
            <a href="{{ route('articles.show', $article) }}">
                {{ $article->title }}
            </a>
            <li></li>
            @endforeach
        </ul>
    {{-- @endif --}}

</div>
