<x-layout>
  <div class="md:w-xl mx-auto">
    <div class="bg-white rounded-xl border border-gray-200 p-8">
      <h1 class="text-center text-3xl font-semibold mb-12">Profile Info</h1>
      @if (auth()->user()->avatar)
        <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="User Avatar"
          class="w-32 h-32 rounded-full mx-auto mb-6" />
      @else
        <img src="{{ asset('storage/' . 'avatars/default-avatar.png') }}" alt="User Avatar"
          class="w-32 h-32 rounded-full mx-auto mb-6" />
      @endif
      <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data"
        class="flex flex-col items-center">
        @csrf
        @method('PUT')
        <x-inputs.text name="name" label="Name" value="{{ auth()->user()->name }}" class="mb-6 w-full"
          placeholder="Enter your name" />
        <x-inputs.text type="email" name="email" label="Email" value="{{ auth()->user()->email }}"
          class="mb-6 w-full" placeholder="Enter your email" />
        <label for="avatar" class="self-start font-medium mb-2">Upload Avatar</label>
        <input type="file" id="avatar" name="avatar" class="file:bg-gray-200 file:px-4 file:py-2 mb-6 w-full" />
        <button type="submit"
          class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition-colors self-start">Update
          Profile</button>
      </form>
    </div>
  </div>
</x-layout>
