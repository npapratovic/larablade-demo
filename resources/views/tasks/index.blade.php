<x-data-table :data="$tasks">
    <x-slot name="columns">
        <x-table-column>Image</x-table-column>
        <x-table-column sortable field="name">Task Name</x-table-column>
        <x-table-column>Actions</x-table-column>
    </x-slot>

    <x-slot name="rows">
        @foreach($tasks as $task)
            <x-table-row>
                <x-table-cell>
                    <img src="{{ $task->image_url }}" class="h-12 w-12 rounded object-cover" alt="{{ $task->name }}">
                </x-table-cell>
                <x-table-cell>
                    <a href="{{ route('tasks.show', $task) }}" class="text-blue-600 hover:underline">
                        {{ $task->name }}
                    </a>
                </x-table-cell>
                <x-table-cell>

                </x-table-cell>
            </x-table-row>
        @endforeach
    </x-slot>
</x-data-table>