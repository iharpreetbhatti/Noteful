@props(['hook', 'lead'])

<section class="hero md:w-3xl mx-auto py-16 px-4 text-center">
  <h1 class="hook text-5xl font-bold bg-gradient-to-r from-gray-900 to-blue-600 bg-clip-text text-transparent mb-6">
    {{ $hook }}</h1>
  <p class="lead text-xl text-gray-500 mb-8">{{ $lead }}</p>

  <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full">
    <x-button-link text="Get Started Free" url="{{ route('register') }}"
      classNames="py-2 px-8 bg-black hover:bg-gray-900 text-white font-medium text-lg w-full sm:w-auto" />
    <x-button-link text="Sign In" url="{{ route('login') }}"
      classNames="py-2 px-8 bg-white text-black hover:bg-gray-100 border border-gray-200 font-medium text-lg w-full sm:w-auto" />
  </div>
</section>
