<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Product App')</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 p-6">

  <!-- Header (optional) -->
  <header class="bg-red-600 text-white p-4 text-center shadow-md mb-6">
    <h1 class="text-4xl font-bold">@yield('header', 'Product Managment')</h1>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto">
    @yield('content')
  </main>

  <!-- Footer (optional) -->
  <footer class="text-center text-gray-600 mt-8">
    <p>&copy; {{ date('Y') }} Product Managment</p>
  </footer>

</body>
</html>