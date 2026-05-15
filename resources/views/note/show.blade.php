<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Note
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-8">
                <p>{{$note ->title}}</p>
                <!-- Back -->
                <a href="{{ route('note.index') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg
                        hover:bg-gray-700 transition">
                    ← Back
                </a>
            </div>

        </div>
    </div>
</x-app-layout>