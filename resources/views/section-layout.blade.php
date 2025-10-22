@props(['id', 'heading', 'subHeading'])
<section id="{{ $id }}" class="container mx-auto py-16 px-4 text-center">
  <h2 class="text-3xl font-bold mb-4">{{ $heading }}</h2>
  <p class="text-gray-500 text-xl mb-8">{{ $subHeading }}</p>
  {{ $slot }}
</section>
