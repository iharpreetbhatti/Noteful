@props(['heading', 'subheading'])
<div class="page-heading mb-5">
  <h1 class="text-2xl font-bold mb-2">{{ $heading }}</h1>
  @if ($subheading)
    <p class="text-gray-600">{{ $subheading }}</p>
  @endif
</div>
