<div class="container">
  <div class="row justify-content-center mt-2">
    <div class="col-md-10 mb-4">
      <div class="card">
        <div class="card-header theme-style">Dashboard</div>
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="card" style="
                max-width: 85%; 
                margin: 0 auto; 
                padding: 10px;
                border: none;">
                <div class="card-body">
                  <div id="account">
                    <img class="img-profile" src="/images/user.png" alt="">
                    <div class="name-profile">Syarif Hidayatulloh</div>
                    <div class="status-profile">Student Of Nusia</div>
                    <div class="status-profile">ID: 12345645</div>
                  </div>
                  <div id="menu">
                    <div class="title-menu">Detail Akun</div>
                    <div class="list-menu">email@gmail.com</div>
                    <div class="list-menu">indonesian</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <p>
                @lang('home.welcome.title')
              </p>
              <p>
                @lang('home.welcome.content')
              </p>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus perspiciatis veritatis qui voluptas
                assumenda enim dignissimos nostrum vero officia nobis impedit magni ducimus vel aperiam a, sint
                eligendi! Vero, atque.</p>

              <hr>

              <!-- <div class="container">
                <canvas id="myPieChart"></canvas>
              </div> -->
              <div class="card" style="border: none;">
                <div class="card-body">
                  <p class="project-name">Topik 1 : Tingkat Dasar</p>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <p class="project-name">Topik 1 : Tingkat Menengah</p>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <p class="project-name">Topik 1 : Tingkat Mahir</p>
                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <p class="project-name">Topik 2 : Tingkat Dasar</p>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <p class="project-name">Topik 2 : Tingkat Menengah</p>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <p class="project-name">Topik 2 : Tingkat Mahir</p>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <div class="container">

              </div>
              <!-- <a class="card custom-card mb-3" href="/topic/easy/learn">
                <h1>Tingkat Dasar</h1>
              </a>

              <a class="card custom-card mb-3" href="/topic/medium/learn">
                <h1>Tingkat Menengah</h1>
              </a>

              <a class="card custom-card" href="/topic/expert/learn">
                <h1>Tingkat Expert</h1>
              </a> -->
            </div>
          </div>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <br>
        </div>
      </div>
    </div>
    <!-- welcome -->
    <div class="col-md-10 mb-4">
      <div class="card">
        <div class="card-header theme-style">Petunjuk</div>
        <div class="row">
          <!-- <div class="col">
            <canvas id="myPieChart"></canvas>
          </div>   -->
          <div class="col">
            <div class="card-body">
              <ol>
                <li>Pilih topik yang ingin dipelajari.</li>
                <li>Baca deskripsi pada laman utama per topik.</li>
                <li>Simak audio percakapan.</li>
                <li>Kerjakan latihan menyimak-mengulang.</li>
              </ol>
              <!-- <p>
                @lang('home.welcome.title')
              </p>
              <p>
                @lang('home.welcome.content')
              </p> -->
            </div>
          </div>
          <!-- row -->
        </div>

      </div>
    </div>
    <div class="col-md-10 mb-4">
      <div class="row">
        <div class="col">
          <a class="card custom-card" href="/topik/1/tingkat-mudah">
            <h4>TOPIK 1 - BASA BASI</h4>
            <!-- <h2>Topik 1 : Basa Basi</h2> -->
            <!-- <p>deskripsi topik dasar itu seperti apa</p> -->
          </a>
        </div>

        <div class="col">
          <a class="card custom-card" href="#" onclick="return false;">
            <h4>TOPIK 2 - BERTEMAN</h4>
          </a>
        </div>

        <div class="col">
          <a class="card custom-card" href="#" onclick="return false;">
            <h4>TOPIK 3 - LIBURAN</h4>
          </a>
          <!-- <div class="orange" style="widht: 100px;">coba</div><br>
          <div class="grey" style="widht: 100px;">coba</div><br>
          <div class="purple" style="widht: 100px;">coba</div><br> -->
        </div>
      </div>

    </div>
    <!-- col-end -->
  </div>
</div>

<style>
.orange {
  background: #ef8f1a;
}

.grey {
  background: #d9d8da;
}

.purple {
  background: #be0eee;
}
</style>
<!-- warna baru -->

<style>
.custom-card {
  background-color: #3a5c9e;
  color: white;
  height: 100px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
}
</style>

<style>
.project-name {
  font-weight: bold;
  margin-top: 10px;
}
</style>
<!-- progress -->

<style>
.img-profile {
  width: 50%;
}

.name-profile {
  font-style: normal;
  font-weight: 600;
  font-size: 20px;
  line-height: 140%;
  color: #1E1E1E;
  margin-top: 10px;
}

.status-profile {
  font-style: normal;
  font-weight: 400;
  font-size: 13px;
  line-height: 140%;
  color: #1E1E1E;
}

.title-menu {
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 140%;
  color: #1E1E1E;
  margin-top: 14px;
}

.list-menu {
  padding-top: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid rgb(0, 0, 0, 0.3);
}
</style>
<!-- menu -->

<style>
#myPieChart {
  width: 300px !important;
  height: 300px !important;
  margin: 10px
}
</style>

<script>
var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {
  type: 'pie', // Jenis chart: pie untuk lingkaran
  data: {
    labels: ['Bicara', 'Tulis', 'Baca'], // Kategori data
    datasets: [{
      label: 'Bahasa Indonesia',
      data: [60, 60, 10], // Data untuk tiap kategori
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ]
    }]
  },
  options: {
    responsive: true, // Membuat chart responsif
  }
});
</script>