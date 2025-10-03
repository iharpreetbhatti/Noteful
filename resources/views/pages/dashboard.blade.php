<x-layout>
  <div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
      <h2 class="heading text-xl font-medium"><i class="fa-regular fa-clock"></i> Recent Notes</h2>
      <a href="/notes" class="p-2 rounded-md inline-block border border-gray-300 bg-white hover:bg-gray-100">
        View All Notes</a>
    </div>
    @for ($i = 0; $i < 6; $i++)
      <x-note-card />
    @endfor
  </div>
</x-layout>
