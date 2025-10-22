<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  @foreach ($testimonialsData as $testimonial)
    <div class="bg-white rounded-xl px-4 py-6 text-left" :key="testimonial - {{ $testimonial['id'] }}">
      @for ($i = 0; $i < 5; $i++)
        <i class="fa-solid fa-star text-amber-300 mb-4"></i>
      @endfor
      <em class="text-gray-500 text-md block">"{{ $testimonial['feedback'] }}"</em>
      <div class="mt-4">
        <h4 class="text-md font-semibold">{{ $testimonial['name'] }}</h4>
        <p class="text-gray-400 text-sm">{{ $testimonial['role'] }}</p>
      </div>
    </div>
  @endforeach
</div>
