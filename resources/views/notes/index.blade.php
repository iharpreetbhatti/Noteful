<x-layout>
  <div class="container mx-auto p-4">
    @for ($i = 0; $i < 6; $i++)
      <x-note-card />
    @endfor
  </div>
</x-layout>
