<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'My App Petra')</title>
  <!-- Tambahkan link CSS atau script lainnya di sini -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  body,
  html {
    margin: 0;
    padding: 0;
    height: 100%;
  }

  iframe {
    width: 100%;
    height: 100%;
    /* border: none;  */
    /* Optional: Removes iframe border */
  }
  </style>
</head>

<body>
  @include('layouts.header')
  <iframe src="https://app.nearpod.com/?pin=4CH3D" frameborder="0" allowfullscreen=""
    allow="accelerometer *; ambient-light-sensor *; autoplay *; camera *; clipboard-read *; clipboard-write *; encrypted-media *; fullscreen *; geolocation *; gyroscope *; magnetometer *; microphone *; midi *; payment *; picture-in-picture *; screen-wake-lock *; speaker *; sync-xhr *; usb *; web-share *; vibrate *; vr *">
  </iframe>
</body>

</html>