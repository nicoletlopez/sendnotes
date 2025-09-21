<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Note;

// new class extends Component {
//     //
// };

new #[Layout('components.layouts.app')] class extends Component {
    public Note $note;
    public function mount(Note $note)
    {
        // $this->note = $note;
        this->authorize('update', $note);
        $this->fill($note);
    }
};

?>

<div class="space-y-2 text-gray-800">
    <p>{{ $note->title }}</p>
    <p>{{ $note->id }}</p>
    <p>{{ $note->user->email }}</p>
</div>
