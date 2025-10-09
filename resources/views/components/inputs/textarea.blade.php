@props(['id' => '', 'name', 'placeholder' => '', 'class' => '', 'value' => ''])

<textarea class="{{ $class }}" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
  rows="8">{{ $value }}
</textarea>

@error($name)
  <div class="text-red-500 mb-2 text-sm">{{ $message }}</div>
@enderror
