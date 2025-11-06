{{-- TODO: Implement Color class binding on selection --}}
{{-- TODO: Implement selected color input attachment to form data --}}

<div class="inline-block relative mb-8" x-data="{ open: false }">
  <div class="cursor-pointer border border-gray-300 p-2 rounded-2xl bg-transparent" @click="open = !open">
    <i class="fa-solid fa-palette fa-xl"></i>
  </div>

  <div class="flex items-center justify-between gap-2 absolute top-0 left-16 p-2 rounded-xl bg-grey-100 shadow bg-white"
    x-show="open" @click.away="open = false">
    <template x-for="color in colors" :key="color">
      <span
        class="w-6 h-6 rounded-full border border-gray-500 hover:ring hover:ring-offset-1 hover:ring-blue-500 cursor-pointer"
        :class="color === 'white' ? 'bg-white' : `bg-${color}-50`"
        :title="color.charAt(0).toUpperCase() + color.slice(1)"
        @click="
            selectedColor = color;
            open = false;
            {{-- $el.querySelector('input[type=hidden]').value = color.value; --}}
          ">
      </span>
    </template>
  </div>
</div>
<input type="hidden" name="color" :value="selectedColor">
