{{-- TODO: Implement Color class binding on selection --}}
{{-- TODO: Implement selected color input attachment to form data --}}

@php
  $colors = json_encode(config('notecolors'));
@endphp

<div class="inline-block relative mb-8" x-data="{ open: false, colors: {{ $colors }}, selectedColor: 'bg-white' }">
  <div class="cursor-pointer border border-gray-300 p-2 rounded-2xl" @click="open = !open">
    <i class="fa-solid fa-palette fa-xl"></i>
  </div>

  <div class="flex items-center justify-between gap-2 absolute top-0 left-16 p-2 rounded-xl bg-grey-100 shadow"
    x-show="open" @click.away="open = false">
    <template x-for="color in colors" :key="color.value">
      <span class="w-6 h-6 rounded-full border border-gray-500 cursor-pointer" :class="color.value"
        :title="color.name"
        @click="
            selectedColor = color.value;
            open = false;
            $el.querySelector('input[type=hidden]').value = color.value;
          ">
      </span>
    </template>
  </div>
</div>
