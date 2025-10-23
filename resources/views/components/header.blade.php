<header class="bg-white border-b border-gray-300">
  <div class="container mx-auto p-4 flex justify-between items-center">
    <a href="/" class="font-bold text-2xl"><i class="fa-regular fa-file-lines"></i> Noteful</a>
    <div class="flex items-center gap-2">
      @auth
        <x-button-link icon="fa-regular fa-file" text="All Notes" url="{{ route('notes.index') }}"
          bgColor="hover:bg-gray-200" />
        <x-button-link icon="fa-solid fa-plus" text="New Note" url="{{ route('notes.create') }}" responsive="true"
          bgColor="bg-black" textColor="text-white" />
        <x-button-link icon="fa-solid fa-right-from-bracket" text="Logout" url="{{ route('logout') }}"
          bgColor="hover:bg-gray-200" />
      @else
        <x-button-link icon="fa-solid fa-right-to-bracket" text="Sign In" url="{{ route('login') }}"
          bgColor="hover:bg-gray-200" />
        <x-button-link icon="fa-solid fa-user-plus" text="Sign Up" url="{{ route('register') }}" bgColor="bg-black"
          textColor="text-white" />
      @endauth
    </div>
  </div>
</header>
