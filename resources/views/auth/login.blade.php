<x-layout>
  <div class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-lvh py-12">
    <h1 class="text-4xl mb-16 text-center"><i class="fa-regular fa-file-lines"></i> Noteful</h1>
    <div class="md:w-xl mx-auto bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-xl font-semibold mb-2 text-center">Welcome back</h2>
      <p class="text-lg text-gray-600 text-center mb-6">Sign in to your account to continue</p>
      <form action="{{ route('login.authenticate') }}" method="POST" class="space-y-6">
        @csrf
        <div>
          <label for="email" class="block mb-2 font-medium">Email</label>
          <input type="email" name="email" id="email" class="w-full bg-gray-200 p-2 rounded"
            value="{{ old('email') }}" placeholder="Enter your email" required>
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="password" class="block mb-2 font-medium">Password</label>
          <input type="password" name="password" id="password" class="w-full bg-gray-200 p-2 rounded"
            placeholder="Enter your password" required>
          @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="text-center">
          <button type="submit"
            class="block w-full bg-black text-white px-4 py-2 rounded hover:bg-black-900 transition cursor-pointer">Sign
            In</button>
        </div>
      </form>
      <div class="text-center mt-6">Don't have an account? <a href="/register" class="font-semibold">Sign up</a></div>
    </div>
  </div>
  </div>
</x-layout>
