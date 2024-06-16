<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Pokédex</h1>


@foreach ($pokemons as $pokemon )
<li>{{ $pokemon}}</li>
@endforeach


    </div>
</x-guest-layout>
