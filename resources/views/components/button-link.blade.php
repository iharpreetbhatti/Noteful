@props([
    'icon' => null,
    'text' => '',
    'url' => '#',
    'bgColor' => '',
    'textColor' => '',
    'responsive' => false,
])

<a href="{{ $url }}" class="p-2 rounded-md text-sm {{ $bgColor }} {{ $textColor }}">
  @if ($icon)
    <i class="{{ $icon }}"></i>
  @endif
  @if ($text)
    <span class="{{ $responsive ? 'hidden' : '' }} md:inline">{{ $text }}</span>
  @endif
</a>
