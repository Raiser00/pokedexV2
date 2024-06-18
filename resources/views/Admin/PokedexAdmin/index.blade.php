<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Administration du ManitoDex</h1>

        <div class="flex items-center justify-center space-x-8">
                            <a href="{{ route('pokemon.create') }}"
                                class="text-gray-500 font-bold py-2 px-4 rounded hover:bg-gray-200 transition">Ajouter un
                                Pokémon</a>
                        </div>

        <ul class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($pokemon as $pokemn)
            <li class="bg-white rounded-lg shadow-lg p-4 transform transition duration-300 hover:shadow-xl hover:scale-105">
                <a href="{{ route('pokemon.show', $pokemn) }}" class="block text-center">
                    <h2 class="text-xl font-bold mb-2">{{ $pokemn->name }}</h2>
                    <img class="mx-auto mb-4" src="{{ asset($pokemn->imgLink) }}" alt="{{ $pokemn->name }}"  />
                    <div class="flex justify-center space-x-2">
                        <img class="h-8" src="{{ asset($pokemn->type1->imgLink) }}" alt="{{ $pokemn->type1->name }}" />
                        @if($pokemn->type2 !== null)
                        <img class="h-8" src="{{ asset($pokemn->type2->imgLink) }}" alt="{{ $pokemn->type2->name }}" />
                        @endif
                        <a href="{{ route('pokemon.edit', $pokemn->id) }}" class="text-blue-400">Edité</a>
                        <form action="{{ route('pokemon.destroy', $pokemn->id) }}" method="POST" class="inline">
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
