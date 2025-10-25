@props([
    'icon' => null,
    'text' => '',
    'url' => '#',
    'classNames' => '',
    'responsive' => false,
])

<a href="{{ $url }}" class="{{ $classNames }} rounded-md text-center">
  @if ($icon)
    <i class="{{ $icon }}"></i>
  @endif
  @if ($text)
    <span class="{{ $responsive ? 'hidden' : '' }} md:inline">{{ $text }}</span>
  @endif
</a>
