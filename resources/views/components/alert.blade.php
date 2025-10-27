@props(['type', 'message'])

@if (session()->has('success') || session()->has('error'))
  <div
    class="container mx-auto p-4 mb-2 text-sm text-white rounded-md {{ $type == 'success' ? 'bg-green-500' : 'bg-red-500' }}"
    x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
    {{ $message }}
  </div>
@endif
