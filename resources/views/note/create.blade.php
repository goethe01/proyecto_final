<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Note
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-8">

                <form action="{{route('note.store')}}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Name note
                        </label>

                        <input 
                            type="text"
                            name="title"
                            class="w-full rounded-lg border-gray-300 shadow-sm 
                                   focus:border-indigo-500 focus:ring-indigo-500
                                   dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="Enter note title">
                    </div>


                    <!-- Content -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Content note
                        </label>

                        <textarea
                            name="content"
                            rows="8"
                            class="w-full rounded-lg border-gray-300 shadow-sm
                                   focus:border-indigo-500 focus:ring-indigo-500
                                   dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="Write your note..."></textarea>
                    </div>


                    <!-- Button -->
                    
                    <div class="flex justify-between items-center pt-4">

                    <!-- Create -->
                    <button
                        type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg
                            hover:bg-indigo-700 transition">
                        Create
                    </button>

                    <!-- Back -->
                    <a href="{{ route('note.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg
                            hover:bg-gray-700 transition">
                        ← Back
                    </a>

                </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>