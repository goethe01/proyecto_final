<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit note
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-8">
                
                <form action="{{route('note.update',$note->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300"
                    >Title</label>
                    <input class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" type="text" name="title" value="{{$note->title}}">
                    
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300"
                    >Content</label>
                    
                    <textarea name="content" rows="8" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                    >{{$note->content}}</textarea>
                    
                    <div class="flex justify-between mt-4">
                        <button class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition">
                            Update
                        </button>

                        <a href="{{ route('note.index') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>