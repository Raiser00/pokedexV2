<x-guest-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset($attack->imgLink) }}" alt="{{ $attack->name }}" class="rounded shadow max-w-full h-auto object-cover object-center" style="max-height: 300px;" />
            <h1 class="font-bold text-xl text-center mt-4 mb-2 capitalize">
                N°{{ $attack->id }} {{ $attack->name }}
            </h1>
            <div class="flex justify-center space-x-2">
                <img class="h-8" src="{{ asset($attack->type->imgLink) }}" alt="{{ $attack->type->name }}" />
            </div>
        </div>

        <div class="p-4 bg-gray-200 rounded shadow">
            <div class="mb-4">
                <p class="mt-4">{{ $attack->description }}</p>
            </div>

            <div class="mb-8">
                <h2 class="font-bold text-lg mb-2">Informations</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded">
                        <tbody>
                        <tr>
                                <td class="px-4 py-2 font-semibold">Nom</td>
                                <td class="px-4 py-2">{{ $attack->name }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Puissance</td>
                                <td class="px-4 py-2">{{ $attack->power }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Précision</td>
                                <td class="px-4 py-2">{{ $attack->accuracy }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">PP</td>
                                <td class="px-4 py-2">{{ $attack->maxpp }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Catégorie</td>
                                <td class="px-4 py-2">{{ $attack->category_id }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-semibold">Type</td>
                                <td class="px-4 py-2">{{ $attack->type_id }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <a href="{{ route('front.attackuser.index') }}" class="font-bold bg-white text-gray-700 px-4 py-2 rounded shadow hover:bg-gray-300 transition">
                    Retour
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
