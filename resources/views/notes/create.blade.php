<x-layout>
  <div class="mx-auto mb-4 p-8 rounded-lg md:w-3xl bg-white">
    <form action="/notes" method="POST">
      @csrf
      <x-inputs.text name="title" placeholder="Note Title" class="p-2 w-full mb-2 focus:outline-none"
        value="{{ old('title') }}" />
      <x-inputs.textarea name="description" placeholder="Start writing your note"
        class="p-2 w-full mb-2 focus:outline-none" value="{{ old('description') }}" />

      <x-color-selector />

      <button type="submit" class="block bg-black text-white px-4 py-2 rounded"><i
          class="fa-regular fa-floppy-disk"></i>
        Save</button>
    </form>
  </div>
</x-layout>
