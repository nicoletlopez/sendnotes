<?php

use Livewire\Volt\Component;
use App\Models\Note;

new class extends Component {
    public function delete($noteId)
    {
        $note = Note::where('id', $noteId)->first();
        $note->delete();
    }

    public function with(): array
    {
        return [
            'notes' => Auth::user()->notes()->orderBy('send_date', 'asc')->get(),
            // 'notes'=> auth()->user()->notes(),
        ];
        // hardcoded belooow
        // return [
        //     'title' => __('Show Notes'),
        // ];
    }
}; ?>

<div>
    <div class="space-y-2">
        <x-button primary right-icon="plus" href="{{ route('notes.create') }}" wire:navigate>Create
            Note</x-button>
        @if ($notes->isEmpty())
            <div class="text-center">
                <p class="text-gray-500">You have no notes yet.</p>
                <p class="text-gray-500">Click the button below to create your first note.</p>
                <div class="mt-4">
                    <x-button primary right-icon="plus" href="{{ route('notes.create') }}" wire:navigate>Create
                        Note</x-button>
                </div>
            </div>
        @else
            <div class="grid grid-cols-3 gap-4 mt-12">
                @foreach ($notes as $note)
                    <x-card wire:key='{{ $note->id }}'>
                        <div class="flex justify-between">
                            <div>
                                <a href="#" class="text-xl font-bold hover:underline hover:text-blue-500">
                                    {{ $note->title }}
                                </a>
                                <p class="text-xs mt-2">{{ Str::limit($note->body, 50) }}</p>
                            </div>
                            <div class="text-xs text-gray-500">
                                {{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }}
                            </div>
                        </div>
                        <div class="flex items-end justify-between mt-4 space-x-1">
                            <p class="text-xs">
                                Recipient: <span class="font-semi-bold">{{ $note->recipient }}</span>
                            </p>
                            <div>
                                <x-mini-button icon="eye" rounded></x-mini-button>
                                <x-mini-button icon="trash" rounded
                                    wire:click="delete('{{ $note->id }}')"></x-mini-button>
                            </div>
                        </div>
                    </x-card>
                @endforeach
            </div>
        @endif
    </div>
</div>
