<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Nusia.id</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
  <div id="app">
    @include('layouts.header')
    <main class="py-4">
      @yield('content')
    </main>
    <!-- <footer class="bg-body-tertiary text-center text-lg-start">
      <div class="text-center p-3 theme-style" style="
        position: fixed;
        width: 100%;
        bottom: 0;">
          © 2021 - 2024 Copyright: Nusantara Indonesia (Nusia.id)
      </div>
    </footer> -->
  </div>

</body>
<style>
  .navbar-brand, .nav-link, #navbarDropdown {
    color: white !important;
  }
  
  .theme-style {
    background-color: #4475DB; 
    color: #FFFFFF;
  }
</style>
</html>