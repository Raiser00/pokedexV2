<x-guest-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset($pokemon->imgLink) }}" alt="{{ $pokemon->name }}" class="rounded shadow aspect-auto object-cover object-center"  />
            <h1 class="font-bold text-xl text-center mt-4 mb-2 capitalize">
                N°{{ $pokemon->id }} {{ $pokemon->name }}
            </h1>
        </div>

        <div class="p-4 bg-gray-200 rounded shadow">
            <div class="mb-4">
                <p class="mt-4">{{ $pokemon->description }}</p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p>
                        <span class="font-bold mr-2">PV:</span> {{ $pokemon->hp }}<br>
                        <span class="font-bold mr-2">Attaque:</span> {{ $pokemon->att }}<br>
                        <span class="font-bold mr-2">Defense:</span> {{ $pokemon->def }}<br>
                        <span class="font-bold mr-2">Taille:</span> {{ $pokemon->size }} m
                    </p>
                </div>
                <div>
                    <p>
                        <span class="font-bold mr-2">Att.Spe:</span> {{ $pokemon->attSpe }}<br>
                        <span class="font-bold mr-2">Def.Spe:</span> {{ $pokemon->defSpe }}<br>
                        <span class="font-bold mr-2">Vitesse:</span> {{ $pokemon->vit }}<br>
                        <span class="font-bold mr-2">Poids:</span> {{ $pokemon->weight }} kg
                    </p>
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <a href="{{ route('front.pokedexuser.index') }}" class="font-bold bg-white text-gray-700 px-4 py-2 rounded shadow hover:bg-gray-200 transition">
                    Retour
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
