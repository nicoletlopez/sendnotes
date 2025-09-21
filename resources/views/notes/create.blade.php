<x-layouts.app :title="__('Create a Note')">
    <div class="flex max-w-2xl h-full space-y-4 w-full mx-auto flex-1 flex-col gap-4 rounded-xl">
        {{-- <div class="text-2xl font-bold mb-4">Create a New Note</div> --}}
        <x-button secondary icon="arrow-left" class="mb-8" href="{{ route('notes.index') }}">All notes</x-button>
        <livewire:notes.create-note />
    </div>

</x-layouts.app>
