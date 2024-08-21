<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-700">{{ __('Création attack') }}</h1>

        <form method="POST" action="{{ route('attack.store', $attack) }}" class="space-y-6" enctype="multipart/form-data">
            @csrf


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div>
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $attack->name) }}" autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="description" rows="4">{{ old('description', $attack->description) }}</textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>




                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Power -->
                    <div>
                        <x-input-label for="power" :value="__('Puissance')" />
                        <x-text-input id="power" class="block mt-1 w-full" type="number" min="0" max="512" name="power" value="{{ old('power', $attack->power) }}" />
                        <x-input-error :messages="$errors->get('power')" class="mt-2" />
                    </div>

                    <!-- Accuracy -->
                    <div>
                        <x-input-label for="accuracy" :value="__('Précision')" />
                        <x-text-input id="accuracy" class="block mt-1 w-full" type="number" min="0" max="100" name="accuracy" value="{{ old('accuracy', $attack->accuracy) }}" />
                        <x-input-error :messages="$errors->get('accuracy')" class="mt-2" />
                    </div>

                    <!-- MAXPP -->
                    <div>
                        <x-input-label for="maxpp" :value="__('MAXPP')" />
                        <x-text-input id="maxpp" class="block mt-1 w-full" type="number" min="5" max="55" name="maxpp" value="{{ old('maxpp', $attack->maxpp) }}" />
                        <x-input-error :messages="$errors->get('maxpp')" class="mt-2" />
                    </div>



                    <!-- Catégorie -->
                    <div>
                        <x-input-label for="category_id" :value="__('Catégorie')" />
                        <x-text-input id="category_id" class="block mt-1 w-full" type="number" min="1" max="3" name="category_id" value="{{ old('category_id', $attack->category_id) }}" />
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="imgLinkCat" :value="__('Image URL')" />
                        <x-text-input id="imgLinkCat" class="block mt-1 w-full" type="file" name="imgLinkCat" :value="old('imgLinkCat')" />
                        <x-input-error :messages="$errors->get('imgLinkCat')" class="mt-2" />
                    </div>

                    <!-- Type -->
                    <div>
                        <x-input-label for="type_id" :value="__('Type')" />
                        <x-text-input id="type_id" class="block mt-1 w-full" type="number" min="1" max="18" name="type_id" value="{{ old('type_id', $attack->type_id) }}" />
                        <x-input-error :messages="$errors->get('type_id')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="imgLinkType" :value="__('Image URL')" />
                        <x-text-input id="imgLinkType" class="block mt-1 w-full" type="file" name="imgLinkType" :value="old('imgLinkType')" />
                        <x-input-error :messages="$errors->get('imgLinkType')" class="mt-2" />
                    </div>




                </div>




                <!-- Submit Button -->
                <div class="flex justify-end">
                    <x-primary-button type="submit">
                        {{ __('Créer') }}
                    </x-primary-button>
                </div>
        </form>
    </div>
</x-app-layout>