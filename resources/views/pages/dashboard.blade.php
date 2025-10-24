<x-layout>
  <div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
      <h2 class="heading text-xl font-medium"><i class="fa-regular fa-clock"></i> Your Recent Notes</h2>
      <a href="/notes" class="p-2 rounded-md inline-block border border-gray-300 bg-white hover:bg-gray-100">
        View All Notes</a>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
      @forelse ($notes as $note)
        <a href="{{ route('notes.show', $note->id) }}" class="">
          <x-note-card :note="$note" />
        </a>
      @empty
        <p class="text-gray-500">No recent notes available.</p>
      @endforelse
    </div>

  </div>
</x-layout>
