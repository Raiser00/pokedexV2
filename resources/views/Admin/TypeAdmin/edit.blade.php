<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-700">{{ __('Modification type') }}</h1>

        <form method="POST" action="{{ route('type.update', $type) }}" class="space-y-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div>
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $type->name) }}" autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>










            </div>




            <!-- Submit Button -->
            <div class="flex justify-end">
                <x-primary-button type="submit">
                    {{ __('Modifier') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>