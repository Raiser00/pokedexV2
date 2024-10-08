<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Liste des types</h1>

        <form action="{{ route('front.typeuser.index') }}" method="GET" class="mb-8">
            <div class="flex justify-center space-x-4">
                <input type="text" name="search" id="search" placeholder="Rechercher un type" class="border border-red-500 rounded shadow px-4 py-2 w-2/5 focus:ring-2 focus:ring-red-500" value="{{ request()->search }}" autofocus />
                <button type="submit" class="bg-red-500 text-white rounded shadow px-4 py-2 hover:bg-red-600 transition duration-300">
                    Catch
                </button>
            </div>
        </form>

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($type as $types)
            <li class="bg-white rounded-lg shadow-lg p-6 transform transition duration-300 hover:shadow-xl hover:scale-105">
                <a href="{{ route('front.typeuser.show', $types) }}" class="block text-center">
                    <h2 class="text-xl font-bold mb-4">{{ $types->name }}</h2>
                    <img class="mx-auto mb-4 max-w-full h-auto max-h-48 object-contain" src="{{ asset($types->imgLink) }}" alt="{{ $types->name }}" />
                    
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</x-guest-layout>
