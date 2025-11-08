<x-layout>
  <div
    class="mx-auto mb-4 p-8 rounded-xl md:w-3xl {{ $note->color === 'white' ? 'bg-white' : 'bg-' . $note->color . '-50' }}">
    <h2 class="text-2xl font-bold my-4">{{ $note->title }}</h2>
    <p class="text-gray-800 mb-4">{{ $note->description }}</p>
    @can('update', $note)
      <div class="flex items-center gap-4">
        <x-button-link :url="route('notes.edit', $note->id)" text="Edit Note" icon="fa-solid fa-pen-to-square"
          bgColor="bg-black hover:bg-gray-800" textColor="text-white" />
        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="inline"
          onsubmit="return confirm('Are you sure you want to delete this note?')">
          @csrf
          @method('DELETE')
          <button type="submit"
            class="bg-red-500 hover:bg-red-700 text-white p-2 rounded-md text-sm w-full cursor-pointer "><i
              class="fa-solid fa-trash"></i>
            Delete Note</button>
        </form>
      </div>
    @endcan
  </div>
</x-layout>
