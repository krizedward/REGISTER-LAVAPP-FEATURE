<nav class="navbar navbar-expand-md shadow-sm theme-style">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img class="logo" src="/images/logo-nusia.png" alt="Nusia.id">
      <!-- <img class="logo" src="/images/logo-white.png" alt="Nusia.id"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register.create') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li>
          <a href="{{ route('changeLang', 'en') }}">
          <div>
            <img src="/images/en.png" 
              style="
                width: 35px;
                margin: 10px;
              " alt="en">
          </div>
          </a>
        </li>
        <li>
          <a href="{{ route('changeLang', 'id') }}">
            <div>
              <img src="/images/id.png" 
                style="
                  width: 35px;
                  margin:10px;
                " alt="en">
            </div>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" 
            role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre style="
            width: 160px;
            float: right;
            text-align: center;
            height: 50px;
            padding-top: 15px;
          ">
            {{ Auth::user()->name }} - 
            @if(Auth::user()->role == 'user')
              Student
            @else
              {{ Auth::user()->role }}
            @endif
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

<style>
  .logo {
    width: 15%;
  }
</style>