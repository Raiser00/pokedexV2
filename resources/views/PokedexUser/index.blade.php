<h1>Test affichage manitoDex</h1>
<ul>
    @foreach ($pokemons as $pokemon)
    <li>{{ $pokemon->title }}</li>
    @endforeach
</ul>
