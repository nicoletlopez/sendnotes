<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                {{-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
                <x-button primary>Hi there notes</x-button>
            </div>
            {{-- ugly way --}}
            {{-- @php
              $notes=App\Models\Note::all()->where('user_id', Auth::user()->id);
            @endphp --}}
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div>

            <livewire:notes.show-notes />

            {{-- scraps beloooow --}}
            {{-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
            {{-- ugly way continuation --}}
            {{-- @foreach ($notes as $note)
            <li>
              <p>{{$note->title}}</p>
            </li>
            @endforeach --}}

            {{-- sample --}}

            {{-- @foreach ($notes as $note)
              <a href="{{route('notes.show', $note->id)  }}">{{$note->title}}</a>
            @endforeach --}}
        </div>
    </div>

</x-layouts.app>
