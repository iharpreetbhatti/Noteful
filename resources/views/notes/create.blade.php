<x-layout>
  <div class="container mx-auto mb-4 p-2 bg-white">
    <form action="/notes" method="POST">
      @csrf
      <input type="text" name="title" placeholder="Note Title" class="border p-2 w-full mb-2"
        value="{{ old('title') }}" />
      <!-- Error Message for Title -->
      @error('title')
        <div class="text-red-500 mb-2 text-sm">{{ $message }}</div>
      @enderror
      <textarea name="description" placeholder="Start writing your note" class="border p-2 w-full mb-2">{{ old('description') }}</textarea>
      @error('description')
        <div class="text-red-500 mb-2 text-sm">{{ $message }}</div>
      @enderror
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded"><i class="fa-regular fa-floppy-disk"></i>
        Save</button>
    </form>
  </div>
</x-layout>
