<div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-md-10 mb-4">
      <div class="card">
        <div class="card-header theme-style">Dashboard</div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <!-- Welcome, Now You Are Nusian !<br> -->
          <!-- Thank You For Choose Nusia To Learning Bahasa. -->
          <p>
            @lang('home.welcome.title')
          </p>
          <p>
            @lang('home.welcome.content')
          </p>
          <br>
        </div>
      </div>
    </div>
    <!-- welcome -->
    <div class="col-md-10 mb-4">
      <a class="card custom-card" href="/topic/easy/learn">
        TOPIC LEVEL : EASY
      </a>
    </div>
    <!-- col-end -->
    <div class="col-md-10 mb-4">
      <a class="card custom-card" href="/topic/medium/learn">
        TOPIC LEVEL : MEDIUM
      </a>
    </div>
    <!-- col-end -->
    <div class="col-md-10 mb-4">
      <a class="card custom-card" href="/topic/expert/learn">
        TOPIC LEVEL : EXPERT
      </a>
    </div>
    <!-- col-end -->
  </div>
</div>

<style>
  .custom-card {
    background-color: #3a5c9e; /* Background biru */
    font-size: 32px;
    color: white; /* Warna teks putih */
    height: 100px; /* Tinggi card */
    display: flex; /* Menggunakan flexbox */
    justify-content: center; /* Menyelaraskan item secara horizontal ke tengah */
    align-items: center; /* Menyelaraskan item secara vertikal ke tengah */
    text-decoration: none; /* Menghilangkan garis bawah pada teks/link */
  }
</style>