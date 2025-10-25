@props(['title', 'value' => '', 'icon' => ''])

<div class="flex-1 bg-white border border-gray-300 rounded-2xl p-6 flex items-center justify-between">
  <div class="mr-4">
    <h3 class="text-sm text-gray-500">{{ $title }}</h3>
    @if ($value !== '')
      <p class="text-2xl font-bold text-gray-900">{{ $value }}</p>
    @else
      <x-button-link url="{{ route('notes.create') }}" text="New Note" icon="fa-solid fa-plus"
        classNames="mt-2 px-4 py-2 text-sm font-medium text-white inline-block bg-black hover:bg-gray-800" />
    @endif
  </div>
  <div>
    @if ($icon)
      <i class="{{ $icon }} fa-2x"></i>
    @endif
  </div>
</div>
