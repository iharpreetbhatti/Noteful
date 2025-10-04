@props(['note'])
<div class="note-card bg-white rounded-2xl border border-gray-300 p-4 mb-4 hover:shadow-md">
  <h3 class="note-title text-lg font-medium mb-2">{{ $note->title }}</h3>
  <p class="note-description text-gray-800 text-sm mb-2">{{ $note->description }}</p>
  <span class="note-date text-sm"><i class="fa-regular fa-calendar"></i> {{ $note->updated_at->format('F d, Y') }}</span>
</div>
