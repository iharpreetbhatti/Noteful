<x-layout>
  <div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
      <h2 class="heading text-xl font-medium"><i class="fa-regular fa-clock"></i> Recent Notes</h2>
      <a href="/notes" class="p-2 rounded-md inline-block border border-gray-300 bg-white hover:bg-gray-100">
        View All Notes</a>
    </div>
    @forelse ($notes as $note)
      <x-note-card :note="$note" />
    @empty
      <p class="text-gray-500">No recent notes available.</p>
    @endforelse
  </div>
</x-layout>
