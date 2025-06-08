{{--  --}}

@props(['paginator'])
<div class="flex items-center justify-between mt-4">
    <div class="flex items
        <p class="text-sm text-gray-700 dark:text-gray-300">
            Showing
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
            to
            <span class="font-medium">{{ $paginator->lastItem() }}</span>
            of
            <span class="font-medium">{{ $paginator->total() }}</span>
            results
        </p>
    </div>
    <div class="flex items-center space-x-2">
        <label for="per-page" class="text-sm text-gray-700 dark:text-gray-300 mr-2">Per Page:</label>
        <select id="per-page" wire:model.live="perPage"
                class="text-sm rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
        </select>
        <div class="flex items-center space-x-1">
            <button wire:click="previousPage" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600" {{ $paginator->onFirstPage() ? 'disabled' : '' }}>
                Previous
            </button>
            <button wire:click="nextPage" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600" {{ $paginator->hasMorePages() ? '' : 'disabled' }}>
                Next
            </button>
        </div>
    </div>
</div>
        <div class="flex items-center space-x-1">
            <button wire:click="previousPage" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600" {{ $paginator->onFirstPage() ? 'disabled' : '' }}>
                Previous
            </button>
            <button wire:click="nextPage" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600" {{ $paginator->hasMorePages() ? '' : 'disabled' }}>
                Next
            </button>
        </div>
    </div>
</div>