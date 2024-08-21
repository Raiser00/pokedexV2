<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-700">{{ __('Modifier Pokémon') }}</h1>

        <form method="POST" action="{{ route('pokemon.update', $pokemon) }}" class="space-y-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div>
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $pokemon->name) }}" autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>



            <!-- Description -->
            <div>
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="description" rows="4">{{ old('description', $pokemon->description) }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- HP -->
                <div>
                    <x-input-label for="hp" :value="__('HP')" />
                    <x-text-input id="hp" class="block mt-1 w-full" type="number" name="hp" value="{{ old('hp', $pokemon->hp) }}" />
                    <x-input-error :messages="$errors->get('hp')" class="mt-2" />
                </div>

                <!-- Attaque -->
                <div>
                    <x-input-label for="att" :value="__('Attaque')" />
                    <x-text-input id="att" class="block mt-1 w-full" type="number" name="att" value="{{ old('att', $pokemon->att) }}" />
                    <x-input-error :messages="$errors->get('att')" class="mt-2" />
                </div>

                <!-- Attaque Spéciale -->
                <div>
                    <x-input-label for="attSpe" :value="__('Attaque Spéciale')" />
                    <x-text-input id="attSpe" class="block mt-1 w-full" type="number" name="attSpe" value="{{ old('attSpe', $pokemon->attSpe) }}" />
                    <x-input-error :messages="$errors->get('attSpe')" class="mt-2" />
                </div>

                <!-- Défense -->
                <div>
                    <x-input-label for="def" :value="__('Défense')" />
                    <x-text-input id="def" class="block mt-1 w-full" type="number" name="def" value="{{ old('def', $pokemon->def) }}" />
                    <x-input-error :messages="$errors->get('def')" class="mt-2" />
                </div>

                <!-- Défense Spéciale -->
                <div>
                    <x-input-label for="defSpe" :value="__('Défense Spéciale')" />
                    <x-text-input id="defSpe" class="block mt-1 w-full" type="number" name="defSpe" value="{{ old('defSpe', $pokemon->defSpe) }}" />
                    <x-input-error :messages="$errors->get('defSpe')" class="mt-2" />
                </div>

                <!-- Vitesse -->
                <div>
                    <x-input-label for="vit" :value="__('Vitesse')" />
                    <x-text-input id="vit" class="block mt-1 w-full" type="number" name="vit" value="{{ old('vit', $pokemon->vit) }}" />
                    <x-input-error :messages="$errors->get('vit')" class="mt-2" />
                </div>

                <!-- Taille (m) -->
                <div>
                    <x-input-label for="size" :value="__('Taille (m)')" />
                    <x-text-input id="size" class="block mt-1 w-full" type="number" step="0.01" name="size" value="{{ old('size', $pokemon->size) }}" />
                    <x-input-error :messages="$errors->get('size')" class="mt-2" />
                </div>

                <!-- Poids (kg) -->
                <div>
                    <x-input-label for="weight" :value="__('Poids (kg)')" />
                    <x-text-input id="weight" class="block mt-1 w-full" type="number" step="0.01" name="weight" value="{{ old('weight', $pokemon->weight) }}" />
                    <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Type 1 -->
                <div>
                    <x-input-label for="type1_id" :value="__('Type 1')" />
                    <select id="type1_id" name="type1_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ old('type1_id', $pokemon->type1_id) == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('type1_id')" class="mt-2" />
                </div>

                <!-- Type 2 -->
                <div>
                    <x-input-label for="type2_id" :value="__('Type 2')" />
                    <select id="type2_id" name="type2_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">{{ __('Aucun') }}</option>
                        @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ old('type2_id', $pokemon->type2_id) == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('type2_id')" class="mt-2" />
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <x-primary-button id="sendEdit" type="submit">
                    {{ __('Modifier') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
