@props(['hook', 'lead'])

<section class="hero lg:w-4xl mx-auto py-16 px-4 text-center">
  <h1 class="hook text-6xl font-bold bg-gradient-to-r from-gray-900 to-blue-600 bg-clip-text text-transparent mb-6">
    {{ $hook }}</h1>
  <p class="lead text-2xl text-gray-500 mb-6">{{ $lead }}</p>

  <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full">
    <a href="#"
      class="py-2 px-4 rounded-md bg-black hover:bg-gray-900 text-white font-medium text-md text-center w-full sm:w-auto">
      Get Started Free
    </a>
    <a href="#"
      class="py-2 px-4 rounded-md bg-white text-black hover:bg-gray-100 border border-gray-200 font-medium text-md text-center w-full sm:w-auto">
      Sign In
    </a>
  </div>
</section>
