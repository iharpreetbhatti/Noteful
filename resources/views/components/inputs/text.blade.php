@props([
    'type' => 'text',
    'id' => '',
    'name' => '',
    'value' => '',
    'placeholder' => 'Enter Text Here',
    'class' => '',
])

<input type="text" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
  placeholder="{{ $placeholder }}" class="{{ $class }}" />

<!-- Error Message for Title -->
@error($name)
  <div class="text-red-500 mb-2 text-sm">{{ $message }}</div>
@enderror
