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

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Sweetalert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
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
.navbar-brand,
.nav-link,
#navbarDropdown {
  color: white !important;
}

.theme-style {
  background-color: #4475DB;
  color: #FFFFFF;
}
</style>

<script type="text/javascript">
function sweetAlert() {
  Swal.fire('Any fool can use a computer')
}

function successAlert() {
  Swal.fire(
    'Ini judul',
    'Ini text dibawah judul',
    'question'
  )
}

function dangerAlert() {
  Swal.fire({
    type: 'error',
    title: 'Oops...',
    text: 'Ada yang gak beres ini',
    footer: '<a href> Ini Footer! </a>'
  })
}

function likeAlert() {
  Swal.fire({
    title: '<strong>HTML <u>example</u></strong>',
    type: 'info',
    html: 'You can use <b>bold text</b>, ' +
      '<a href="//sweetalert2.github.io">links</a> ' +
      'and other HTML tags',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
  })
}

function confirmAlert() {
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
}
</script>

</html>