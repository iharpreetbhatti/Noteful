<x-layout>
  <div class="container mx-auto p-4">

    @forelse ($notes as $note)
      <a href="{{ route('notes.show', $note->id) }}">
        <x-note-card :note="$note" />
      </a>
    @empty
      <p class="text-gray-600">No notes available.</p>
    @endforelse
  </div>
</x-layout>
