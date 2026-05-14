<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Home notes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm ">
                <a class="inline-block px-4 py-2 text-gray-900 dark:text-gray-100 border rounded" href="{{route('note.create')}}">Crear nota</a>
            </div>
            
            <br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @forelse ($notes as $note)
                    <div class="inline-block px-12 py-3 m-2 text-gray-900 dark:text-gray-100 border rounded">
                        
                        <p>{{$note->title}}</p>
                    </div>    
                    @empty
                        <p>No hay notas disponibles</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>