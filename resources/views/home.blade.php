<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-center p-10">

  <h1 class="text-4xl font-bold text-blue-600">Welcome to Your Frontend</h1>
  <p class="mt-4 text-lg text-gray-700">Let's build something amazing!</p>

  <button onclick="alert('You clicked me!')" class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Click Me
  </button>

  <!-- 👇 Vue app mount point, with the component tag -->
  <div id="app">
    <example></example>
  </div>

</body>
</html>