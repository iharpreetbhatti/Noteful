<x-layout>
  <div class="container mx-auto mb-4 p-2 bg-white">
    <form action="/notes" method="POST">
      @csrf
      <input type="text" name="title" placeholder="Note Title" class="border p-2 w-full mb-4" />
      <textarea name="description" placeholder="Start writing your note" class="border p-2 w-full mb-4"></textarea>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded"><i class="fa-regular fa-floppy-disk"></i>
        Save</button>
    </form>
  </div>
</x-layout>
