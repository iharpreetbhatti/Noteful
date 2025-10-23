@props(['heading', 'subheading'])
<div class="page-heading mt-6 mb-8">
  <h1 class="text-3xl font-bold mb-2">{{ $heading }}</h1>
  @if ($subheading)
    <p class="text-gray-600">{{ $subheading }}</p>
  @endif
</div>
