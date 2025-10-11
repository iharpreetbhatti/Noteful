@props(['hook', 'lead'])

<div class="container mx-auto px-32">
  <h1 class="hook text-5xl font-bold bg-gradient-to-r from-gray-900 to-blue-600 bg-clip-text text-transparent mb-6">
    {{ $hook }}</h1>
  <p class="lead text-xl text-gray-500 mb-4">{{ $lead }}</p>

  <div class="flex items-center justify-center gap-4 w-full my-8">
    <x-button-link text="Get Started Free" url="#" bgColor="bg-black" textColor="text-white" />
    <x-button-link text="Sign In" url="#" bgColor="bg-white" textColor="text-black" />
  </div>
</div>
