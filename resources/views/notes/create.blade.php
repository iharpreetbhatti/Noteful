{{-- @php
  dd(config('notecolors'));
@endphp --}}
<x-layout>
  <div x-data="{ colors: {{ json_encode(config('notecolors')) }}, selectedColor: 'white' }">
    <div class="mx-auto mb-4 p-8 rounded-lg md:w-3xl"
      :class="selectedColor === 'white' ? 'bg-white' : `bg-${selectedColor}-50`">
      <form action="/notes" method="POST">
        @csrf
        <x-inputs.text name="title" placeholder="Note Title" class="p-2 w-full mb-2 focus:outline-none"
          value="{{ old('title') }}" />
        <x-inputs.textarea name="description" placeholder="Start writing your note"
          class="p-2 w-full mb-2 focus:outline-none" value="{{ old('description') }}" />

        <x-color-selector />

        <button type="submit" class="block bg-black text-white px-4 py-2 rounded cursor-pointer"><i
            class="fa-regular fa-floppy-disk"></i>
          Save</button>
      </form>
    </div>
  </div>
</x-layout>
