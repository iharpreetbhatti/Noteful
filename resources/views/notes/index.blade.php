<x-layout>
  <div class="container mx-auto p-4">

    @forelse ($notes as $note)
      <x-note-card :note="$note" />
    @empty
      <p class="text-gray-600">No notes available.</p>
    @endforelse
  </div>
</x-layout>
