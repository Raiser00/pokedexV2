<x-guest-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset($pokemon->imgLink) }}" alt="{{ $pokemon->name }}" class="rounded shadow max-w-full h-auto object-cover object-center" style="max-height: 300px;" />
            <h1 class="font-bold text-xl text-center mt-4 mb-2 capitalize">
                N°{{ $pokemon->id }} {{ $pokemon->name }}
            </h1>
            <div class="flex justify-center space-x-2">
                <img class="h-8" src="{{ asset($pokemon->type1->imgLink) }}" alt="{{ $pokemon->type1->name }}" />
                @if($pokemon->type2 !== null)
                <img class="h-8" src="{{ asset($pokemon->type2->imgLink) }}" alt="{{ $pokemon->type2->name }}" />
                @endif
            </div>
        </div>

        <div class="p-4 bg-gray-200 rounded shadow">
            <div class="mb-4">
                <p class="mt-4">{{ $pokemon->description }}</p>
            </div>

            <div class="mb-8">
                <h2 class="font-bold text-lg mb-2">Statistiques</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded">
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 font-semibold">PV</td>
                                <td class="px-4 py-2">{{ $pokemon->hp }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Attaque</td>
                                <td class="px-4 py-2">{{ $pokemon->att }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Attaque Spéciale</td>
                                <td class="px-4 py-2">{{ $pokemon->attSpe }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Défense</td>
                                <td class="px-4 py-2">{{ $pokemon->def }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Défense Spéciale</td>
                                <td class="px-4 py-2">{{ $pokemon->defSpe }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Vitesse</td>
                                <td class="px-4 py-2">{{ $pokemon->vit }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Taille</td>
                                <td class="px-4 py-2">{{ $pokemon->size }} m</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Poids</td>
                                <td class="px-4 py-2">{{ $pokemon->weight }} kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <a href="{{ route('front.pokedexuser.index') }}" class="font-bold bg-white text-gray-700 px-4 py-2 rounded shadow hover:bg-gray-300 transition">
                    Retour
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
