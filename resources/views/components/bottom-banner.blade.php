<div id="bottomBanner" class="container mx-auto ">
  <div class="bg-black text-white py-12 px-4 mx-4 mt-16 text-center rounded-lg">
    <h2 class="text-3xl font-bold mb-4">Ready to get organized?</h2>
    <p class="text-lg mb-8">Join thousands of users who have transformed their note-taking experience</p>
    <x-button-link text="Start Free Today" url="{{ route('register') }}"
      classNames="bg-white text-black text-lg font-semibold px-8 py-2 hover:bg-gray-200 transition duration-300 block md:inline mb-4 md:mr-2" />
    <x-button-link text="Sign In" url="{{ route('login') }}"
      classNames="bg-black text-white text-lg border border-white font-semibold px-8 py-2 hover:bg-white hover:text-black transition duration-300 block md:inline" />
  </div>
</div>
