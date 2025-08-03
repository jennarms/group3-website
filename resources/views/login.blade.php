<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-b from-blue-400 via-indigo-300 to-green-200 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-sm">
        <div class="flex justify-center mb-6">
            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center text-3xl text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </div>
        </div>
        <h2 class="text-center text-xl font-semibold mb-4">Log in</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label class="block mb-2 text-sm">Email</label>
            <input type="email" name="email" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300 mb-4">

            <label class="block mb-2 text-sm">Password</label>
            <input type="password" name="password" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300 mb-6">

            <button type="submit" class="w-full bg-blue-900 text-white py-2 rounded-full hover:bg-blue-800">Log in</button>

            <div class="mt-4 text-center">
                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:underline">Forgot password?</a>
            </div>
        </form>

        <div id="app"></div>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email and password fields -->
    </form>
</body>
</html>
