<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Administration du ManitoDex</h1>

        <form action="{{ route('front.pokedexadmin.create') }}" method="GET" class="mb-8">
            <div class="flex justify-center space-x-4">
                <button type="submit" class="bg-red-500 text-white rounded shadow px-4 py-2 hover:bg-red-500 transition">
                    Créé un Pokemon
                </button>
            </div>
        </form>

        <ul class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($pokemon as $pokemn)
            <li class="bg-white rounded-lg shadow-lg p-4 transform transition duration-300 hover:shadow-xl hover:scale-105">
                <a href="{{ route('front.pokedexadmin.show', $pokemn) }}" class="block text-center">
                    <h2 class="text-xl font-bold mb-2">{{ $pokemn->name }}</h2>
                    <img class="mx-auto mb-4" src="{{ asset($pokemn->imgLink) }}" alt="{{ $pokemn->name }}" width="150" height="100" />
                    <div class="flex justify-center space-x-2">
                        <img class="h-8" src="{{ asset($pokemn->type1->imgLink) }}" alt="{{ $pokemn->type1->name }}" />
                        @if($pokemn->type2 !== null)
                        <img class="h-8" src="{{ asset($pokemn->type2->imgLink) }}" alt="{{ $pokemn->type2->name }}" />
                        @endif
                        <a href="{{ route('front.pokedexadmin.edit', $pokemn->id) }}" class="text-blue-400">Edité</a>
                        <form action="{{ route('front.pokedexadmin.destroy', $pokemn->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400">Supprimer</button>
                        </form>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</x-guest-layout>
