<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Liste du ManitoDex</h1>

        <form action="{{ route('front.pokedexuser.index') }}" method="GET" class="mb-8">
            <div class="flex justify-center space-x-4">
                <input type="text" name="search" id="search" placeholder="Rechercher un Pokémon" class="border border-red-500 rounded shadow px-4 py-2 w-2/8" value="{{ request()->search }}" autofocus />
                <button type="submit" class="bg-red-500 text-white rounded shadow px-4 py-2 hover:bg-red-500 transition">
                    Catch
                </button>
            </div>
        </form>

        <ul class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($pokemon as $pokemn)
            <li class="bg-white rounded-lg shadow-lg p-4 transform transition duration-300 hover:shadow-xl hover:scale-105">
                <a href="{{ route('front.pokedexuser.show', $pokemn) }}" class="block text-center">
                    <h2 class="text-xl font-bold mb-2">{{ $pokemn->name }}</h2>
                    <img class="mx-auto mb-4" src="{{ asset($pokemn->imgLink) }}" alt="{{ $pokemn->name }}"  />
                    <div class="flex justify-center space-x-2">
                        <img class="h-8" src="{{ asset($pokemn->type1->imgLink) }}" alt="{{ $pokemn->type1->name }}" />
                        @if($pokemn->type2 !== null)
                        <img class="h-8" src="{{ asset($pokemn->type2->imgLink) }}" alt="{{ $pokemn->type2->name }}" />
                        @endif
                    </div>
                </a>
            </li>
            @endforeach
        </ul>

    </div>
</x-guest-layout>
