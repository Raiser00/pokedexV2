<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-700">{{ __('Création Type') }}</h1>

        <form method="POST" action="{{ route('type.store') }}" class="space-y-6" enctype="multipart/form-data">
            @csrf


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div>
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>




                <!-- Image -->
                <div>
                    <x-input-label for="imgLink" :value="__('Image URL')" />
                    <x-text-input id="imgLink" class="block mt-1 w-full" type="file" name="imgLink" :value="old('imgLink')" />
                    <x-input-error :messages="$errors->get('imgLink')" class="mt-2" />
                </div>

                <!-- Type -->
                
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