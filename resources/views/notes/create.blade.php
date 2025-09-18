<x-layouts.app :title="__('Create a Note')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            {{-- <div class="text-2xl font-bold mb-4">Create a New Note</div> --}}
            <livewire:notes.create-note />
        </div>
    </div>

</x-layouts.app>
