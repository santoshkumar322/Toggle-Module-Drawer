<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blade Landing Section</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
  
</head>
<body class="bg-gray-100">

  <!-- Blur Blade Background Section -->
  <section class="relative py-16 px-4 md:px-12 lg:px-24 overflow-hidden">
    <div class="absolute inset-0 bg-blue-200 blur-xl opacity-30"></div>
    <div class="relative max-w-6xl mx-auto text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
        Blade Interface
      </h1>
      <p class="text-lg md:text-xl text-gray-700 max-w-2xl mx-auto">
        Seamlessly manage modules with clean design and smooth functionality.
      </p>
    </div>
  </section>

  <!--  Module Drawer -->
  <div id="moduleDrawer" class="max-w-6xl mx-auto p-6 md:p-10 bg-white shadow-lg rounded-lg">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Example Module Card -->
      <div class="border rounded-xl p-5 bg-gray-50 hover:shadow transition-all">
        <h3 class="text-lg font-semibold text-gray-800">Module A</h3>
        <p class="text-gray-600 mt-2 text-sm">This module provides tools and stats.</p>
        <div class="mt-4 flex flex-wrap gap-2">
          <span class="bg-blue-100 text-blue-700 px-3 py-1 text-xs rounded-full">Option A1</span>
          <span class="bg-green-100 text-green-700 px-3 py-1 text-xs rounded-full">Option A2</span>
        </div>
      </div>
      <!-- Repeat for additional modules -->
      <div class="border rounded-xl p-5 bg-gray-50 hover:shadow transition-all">
        <h3 class="text-lg font-semibold text-gray-800">Module B</h3>
        <p class="text-gray-600 mt-2 text-sm">Another module example description.</p>
        <div class="mt-4 flex flex-wrap gap-2">
          <span class="bg-yellow-100 text-yellow-700 px-3 py-1 text-xs rounded-full">Feature B1</span>
          <span class="bg-red-100 text-red-700 px-3 py-1 text-xs rounded-full">Feature B2</span>
        </div>
      </div>
      <!-- More modules as needed… -->
    </div>
  </div>

  <!-- Drawer Toggle Button (optional JS interactivity) -->
  <div class="text-center mt-8">
    <button id="toggleDrawer" class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 focus:outline-none">
      Toggle Module Drawer
    </button>
  </div>

  <script src="script.js"></script>
</body>
</html>
