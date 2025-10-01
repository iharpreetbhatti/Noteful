<x-layout>
  <div class="container mx-auto p-4">
    <div class="heading text-xl font-medium">Your Notes</div>
    <div class="sub-heading text-gray-500 mb-4">6 notes</div>
    @for ($i = 0; $i < 6; $i++)
      <x-note-card />
    @endfor
  </div>
</x-layout>
