@extends('layouts.app')

@section('content')
<!-- <img src="/images/splash-screen.jpg" class="fullscreen-image" id="fullscreenImage"> -->
<div class="fullscreen-image" id="fullscreenImage">
  <video class="fullscreen-video" autoplay muted>
    <source src="/video/splashscreen.mp4" type="video/mp4">
  </video>
</div>
<!-- <div class="fullscreen-image" id="fullscreenImage"></div> -->
<!-- <div class="video-container">
    <iframe width="560" height="315" 
      src="https://www.youtube.com/embed/-EE0W5Lg738?autoplay=1&mute=1" 
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe>
</div> -->

<div class="container">
  <div class="row justify-content-center mt-2">
    <div class="col-md-4">
      <img style="padding-left: 35px;" src="/images/login.png" alt="login-icon">
    </div>
    <div class="col-md-6">
      <div class="accordion mb-3" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              List Username Dan Password
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>admin@nusia.id</td>
                    <td>password</td>
                    <td>admin</td>
                  </tr>
                  <tr>
                    <td>user@nusia.id</td>
                    <td>password</td>
                    <td>user</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header theme-style">{{ __('Login') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <br>
</div>

<style>
  /* CSS tambahan untuk styling */
  .fullscreen-image {
    display: none; /* Sembunyikan gambar secara default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-color: white;
    z-index: 9999; /* Pastikan gambar di atas elemen lain */
    opacity: 1; /* Tetapkan opasitas awal */
    transition: opacity 2s ease; /* Animasi transisi opasitas */
  }

  /* Animasi fade out */
  .fullscreen-image.fade-out {
    opacity: 0; /* Atur opasitas menjadi 0 */
    z-index: -9999;
  }

  .fullscreen-video {
    display: block; /* Tampilkan video secara default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 9999;
  }
</style>

<script>
   $(document).ready(function() {
    // Cek apakah elemen fullscreen telah ditampilkan sebelumnya
    var fullscreenShown = localStorage.getItem('fullscreenShown');
    
    if (!fullscreenShown) {
      // Tampilkan gambar setelah halaman dimuat
      $('#fullscreenImage').show();
      
      // Sembunyikan gambar setelah 3 detik dengan efek fade out
      setTimeout(function() {
        $('#fullscreenImage').addClass('fade-out');
        
        // Setel status bahwa elemen fullscreen telah ditampilkan
        localStorage.setItem('fullscreenShown', 'true');
      }, 8000);
    }
  });
</script>
@endsection