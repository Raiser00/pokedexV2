<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Liste des types
            
        </h1>

        <form action="{{ route('front.attackuser.index') }}" method="GET" class="mb-8">
            <div class="flex justify-center space-x-4">
                <input type="text" name="search" id="search" placeholder="Rechercher une attaque" class="border border-red-500 rounded shadow px-4 py-2 w-2/5 focus:ring-2 focus:ring-red-500" value="{{ request()->search }}" autofocus />
                <button type="submit" class="bg-red-500 text-white rounded shadow px-4 py-2 hover:bg-red-600 transition duration-300">
                    Catch
                </button>
            </div>
        </form>

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($attack as $attacks)
            <li class="bg-white rounded-lg shadow-lg p-6 transform transition duration-300 hover:shadow-xl hover:scale-105">
                <a href="{{ route('front.attackuser.show', $attacks) }}" class="block text-center">
                    <h2 class="text-xl font-bold mb-4">{{ $attacks->name }}</h2>
                    <img class="mx-auto mb-4 max-w-full h-auto max-h-48 object-contain" src="{{ asset($attacks->imgLink) }}" alt="{{ $attacks->name }}" />
                    <div class="flex justify-center space-x-2">
                        <img class="h-8 w-8 object-cover" src="{{ asset($attacks->category->imgLink) }}" alt="{{ $attacks->category->name }}" />
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</x-guest-layout>
