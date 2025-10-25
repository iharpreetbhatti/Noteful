@php
  $firstName = explode(' ', auth()->user()->name)[0];
@endphp
<x-layout>
  <div class="container mx-auto p-4">
    <x-pageheading heading="Good morning, {{ $firstName }}!" subheading="Ready to capture your thoughts today?" />
    <div class="flex justify-between items-center mb-4">
      <h2 class="heading text-xl font-medium"><i class="fa-regular fa-clock"></i> My Recent Notes</h2>
      <x-button-link url="{{ route('notes.index') }}" text="View All Notes"
        classNames="px-4 py-2 text-sm font-medium inline-block border border-gray-300 bg-white hover:bg-gray-100" />
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
