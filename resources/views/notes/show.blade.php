<x-layout>
  <div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold my-4">{{ $note->title }}</h2>
    <p class="text-gray-800 mb-4">{{ $note->description }}</p>
    <div class="flex items-center gap-4">
      <x-button-link :url="route('notes.edit', $note->id)" text="Edit Note" icon="fa-solid fa-pen-to-square"
        bgColor="bg-black hover:bg-gray-800" textColor="text-white" />
      <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit"
          class="bg-red-500 hover:bg-red-700 text-white p-2 rounded-md text-sm w-full cursor-pointer "><i
            class="fa-solid fa-trash"></i>
          Delete Note</button>
      </form>
    </div>

  </div>
</x-layout>
