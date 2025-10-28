<header class="bg-white border-b border-gray-300">
  <div class="container mx-auto p-4 flex justify-between items-center">
    <a href="/" class="font-bold text-2xl"><i class="fa-regular fa-file-lines"></i> Noteful</a>
    <nav class="flex items-center gap-2">
      @auth
        <x-button-link icon="fa-regular fa-file" text="All Notes" url="{{ route('notes.index') }}"
          classNames="py-2 px-4 text-sm hover:bg-gray-200" />
        <x-button-link icon="fa-solid fa-plus" text="New Note" url="{{ route('notes.create') }}" responsive="true"
          classNames="py-2 px-4 text-sm bg-black text-white" />
        <div x-data="{ open: false }" class="relative">
          @if (auth()->user()->avatar)
            <img @click="open = !open" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="User Avatar"
              class="w-10 h-10 rounded-full border border-gray-300 cursor-pointer ml-2" />
          @else
            <img @click="open = !open" src="{{ asset('storage/' . 'avatars/default-avatar.png') }}" alt="User Avatar"
              class="w-10 h-10 rounded-full border border-gray-300 cursor-pointer ml-2" />
          @endif
          <div x-show="open" @click.away="open = false"
            class="absolute top-0 right-0 mt-12 bg-white border border-gray-300 rounded shadow-lg flex flex-col items-center z-50">
            <a href="{{ route('dashboard') }}"
              class="py-2 px-4 text-sm hover:bg-gray-200 w-full flex items-center justify-start gap-2">
              <i class="fa-solid fa-gauge"></i>
              <span>Dashboard</span>
            </a>
            <a href="{{ route('profile') }}"
              class="py-2 px-4 text-sm hover:bg-gray-200 w-full flex items-center justify-start gap-2">
              <i class="fa-solid fa-user"></i>
              <span>Profile</span>
            </a>
            <a href="{{ route('logout') }}"
              class="py-2 px-4 text-sm hover:bg-gray-200 w-full flex items-center justify-start gap-2">
              <i class="fa-solid fa-right-to-bracket"></i>
              <span>Sign Out</span>
            </a>
          </div>
        </div>
      @else
        <x-button-link icon="fa-solid fa-right-to-bracket" text="Sign In" url="{{ route('login') }}"
          classNames="py-2 px-4 text-sm hover:bg-gray-200" />
        <x-button-link icon="fa-solid fa-user-plus" text="Sign Up" url="{{ route('register') }}"
          classNames="py-2 px-4 text-sm bg-black text-white" />
      @endauth
    </nav>
  </div>
</header>
