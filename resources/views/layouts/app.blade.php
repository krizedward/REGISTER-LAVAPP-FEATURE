<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div id="app">
    @include('layouts.header')
    <main class="py-4">
      @yield('content')
    </main>
    <footer class="bg-body-tertiary text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="
            background-color: rgba(0, 0, 0);
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;">
        © 2024 Copyright: Edward Kristian Mangare, S.Kom
      </div>
      <!-- Copyright -->
    </footer>
  </div>

</body>

</html>