<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Liste des attaques</h1>

        <div class="flex items-center justify-center space-x-8 mb-6">
            <a href="{{ route('attack.create') }}" class="text-gray-700 font-bold py-2 px-4 rounded bg-gray-100 hover:bg-gray-200 transition">Ajouter une Attaque</a>
        </div>

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($attack as $attacks)
            <li class="bg-white rounded-lg shadow-lg p-6 transform transition duration-300 hover:shadow-xl hover:scale-105">
                <a href="{{ route('front.attackuser.show', $attacks) }}" class="block text-center">
                    <h2 class="text-xl font-bold mb-4">{{ $attacks->name }}</h2>
                    <img class="mx-auto mb-4 max-w-full h-auto max-h-48 object-contain" src="{{ asset($attacks->imgLinkType) }}" alt="{{ $attacks->name }}" />
                    <div class="flex justify-center space-x-2">
                        <img class="h-8 w-8 object-cover" src="{{ asset($attacks->imgLinkCat) }}" alt="{{ $attacks->category }}" />
                    </div>
                    <div class="mb-8">
                        <h2 class="font-bold text-lg mb-2">Informations</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200 rounded">
                                <tbody>
                                    <tr>
                                        <td class="font-semibold">Puissance</td>
                                        <td class="">{{ $attacks->power }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold">Précision</td>
                                        <td class="">{{ $attacks->accuracy }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold">PP</td>
                                        <td class="">{{ $attacks->maxpp }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold">Catégorie</td>
                                        <td class="">{{ $attacks->category->name }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('attack.edit', $attacks->id) }}" class="text-blue-500 font-medium hover:underline">Éditer</a>
                            <form action="{{ route('attack.destroy', $attacks->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 font-medium hover:underline">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>