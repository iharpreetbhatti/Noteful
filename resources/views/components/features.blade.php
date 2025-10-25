<div class="features-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
  @foreach ($featuresData as $feature)
    <div class="bg-white rounded-xl px-4 py-6 hover:shadow-lg transition-shadow duration-300 text-left"
      :key="feature - {{ $feature['id'] }}">
      <span class="bg-gray-200 rounded p-3 mr-2"><i class="{{ $feature['icon'] }} fa-lg"></i></span>
      <h4 class="inline text-md font-semibold">{{ $feature['title'] }}</h4>
      <p class="text-gray-500 text-md mt-4">{{ $feature['description'] }}</p>
    </div>
  @endforeach
</div>
