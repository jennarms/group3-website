<template>
  <div class="bg-white rounded-2xl shadow-md p-8 w-full max-w-sm">
    <div class="text-center">
      <div class="w-16 h-16 rounded-full bg-gray-300 mx-auto mb-4 flex items-center justify-center">
        <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A13.937 13.937 0 0112 15c2.61 0 5.033.75 7.121 2.033M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
      </div>
      <h2 class="text-2xl font-bold mb-2">Log in</h2>
    </div>
    <form>
      <input type="email" placeholder="Email" class="w-full mb-3 px-4 py-2 border rounded" />
      <input type="password" placeholder="Password" class="w-full mb-3 px-4 py-2 border rounded" />
      <button type="submit" class="w-full bg-blue-900 text-white py-2 rounded">Log in</button>
    </form>
    <div class="text-center mt-4">
      <a href="#" class="text-sm text-blue-700 hover:underline">Forgot password?</a>
    </div>
  </div>
</template>