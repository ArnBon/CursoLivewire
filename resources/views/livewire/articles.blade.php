<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    {{-- Articles List --}}
    {{-- <h1>{{ $h1 }}</h1> --}}
    <h1>Listado de articulos</h1>
    <br>

    <ul>
        @foreach ($articles as $article)
        <li>{{ $article->title }}</li>
        @endforeach
    </ul>

</div>
