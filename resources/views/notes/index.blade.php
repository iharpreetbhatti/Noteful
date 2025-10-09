<x-layout>
  <div class="container mx-auto p-4">
    <x-pageheading heading="All Notes" subheading="{{ $notes->count() }} notes in total" />
    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-4">
      @forelse ($notes as $note)
        <a href="{{ route('notes.show', $note->id) }}" class="">
          <x-note-card :note="$note" />
        </a>
      @empty
        <p class="text-gray-600">No notes available.</p>
      @endforelse
    </div>

  </div>
</x-layout>
