<div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-md-10 mb-4">
      <div class="card">
        <div class="card-header theme-style">Dashboard</div>
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <img style="padding-left:65px;" src="/images/menu-dashboard.jpg" alt="">
            </div>
            <div class="col">
              <p>
                @lang('home.welcome.title')
              </p>
              <p>
                @lang('home.welcome.content')
              </p>

              <a class="card custom-card mb-3" href="/topic/easy/learn">
                <h1>Tingkat Dasar</h1>
              </a>

              <a class="card custom-card mb-3" href="/topic/medium/learn">
                <h1>Tingkat Menengah</h1>
              </a>

              <a class="card custom-card" href="/topic/expert/learn">
                <h1>Tingkat Expert</h1>
              </a>
            </div>
          </div>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <!-- Welcome, Now You Are Nusian !<br> -->
          <!-- Thank You For Choose Nusia To Learning Bahasa. -->
          <br>
        </div>
      </div>
    </div>
    <!-- welcome -->
    <div class="col-md-10 mb-4">
      <a class="card custom-card" href="/topic/easy/learn">
        <h1>Tingkat Dasar</h1>
        <p>deskripsi level dasar itu seperti apa</p>
      </a>
    </div>
    <!-- col-end -->
    <div class="col-md-10 mb-4">
      <a class="card custom-card" href="/topic/medium/learn">
        <h1>Tingkat Menengah</h1>
        <p>deskripsi level menengah itu seperti apa</p>
      </a>
    </div>
    <!-- col-end -->
    <div class="col-md-10 mb-4">
      <a class="card custom-card" href="/topic/expert/learn">
        <h1>Tingkat Expert</h1>
        <p>deskripsi level menengah itu seperti apa</p>
      </a>
    </div>
    <!-- col-end -->
  </div>
</div>

<style>
  .custom-card {
    background-color: #3a5c9e; /* Background biru */
    /* font-size: 32px; */
    color: white; /* Warna teks putih */
    height: 100px; /* Tinggi card */
    display: flex; /* Menggunakan flexbox */
    justify-content: center; /* Menyelaraskan item secara horizontal ke tengah */
    align-items: center; /* Menyelaraskan item secara vertikal ke tengah */
    text-decoration: none; /* Menghilangkan garis bawah pada teks/link */
  }
</style>