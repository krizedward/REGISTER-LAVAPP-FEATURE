@extends('layouts.app')

@section('content')
<div class="container">
  @if (Auth::user()->role == 'admin')
  <!-- <ul>
    <li>total user</li>
    <li>user yang mendaftar hari ini</li>
  </ul> -->
  <div class="row justify-content-center mt-4">
    <div class="col-md-8">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Total User
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
    </div>

  </div>
  @endif

  @if (Auth::user()->role == 'user')
  <div class="row justify-content-center">
    <div class="col-md-10 mb-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/topic/easy/learn">Tingkat Easy</a></li>
          <li class="breadcrumb-item active" aria-current="page">Topik 01</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- dashboard -->

  <div class="row justify-content-center">
    <div class="col-md-3 mb-4">
      <div class="card">
        <div class="card-header theme-style">Procedure</div>
        <div class="card-body">
          <img style="
            width: 90%;
            margin-bottom: 10px;
          " src="/images/topic.png">
          <p style="
            font-style: normal; 
            font-weight: 400;
            font-size: 12px;
            line-height: 150%;
            color: #1E1E1E;">
            Prosedur pengerjaan:
          <ol style="
            font-style: normal; 
            font-weight: 400;
            font-size: 12px;
            line-height: 150%;
            color: #1E1E1E;">
            <li>Tonton Video Percakapan</li>
            <li>Kerjakan Latihan Menyimak-mengulang</li>
            <li>Nialai Performa menyimak-mengulang Anda secara mandiri</li>
            <li>Baca Pembahasan materi teks dialog dan catatan budaya</li>
            <li>Kerjakan latihan berbicara (bermain peran)</li>
            <li>Nilai performa  berbicara Anda secara mandiri</li>
          </ol>
          </p>
        </div>
      </div>
    </div>

    <!-- <div class="col-md-7 mb-4">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation" style="color: black !important;">
              <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true" style="color: black !important;">
                @lang('home.test.topic-1')
              </a>
            </li>
            <li class="nav-item" role="presentation" style="color: black !important;">
              <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false" style="color: black !important;">
                @lang('home.test.topic-2')
              </a>
            </li>
            <li class="nav-item" role="presentation" style="color: black !important;">
              <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false" style="color: black !important;">
                @lang('home.test.topic-3')
              </a>
            </li>
          </ul>
          <div class="tab-content pt-3" id="tab-content" style="margin-bottom: 10px; min-height: 500px;">
            <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
              @include('topik.topik-1')
            </div>
            <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
              @lang('home.test.topic-2')
            </div>
            <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
              @lang('home.test.topic-3')
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="col-md-7 mb-4">
      <div class="card mb-4">
        <div class="card-header theme-style">Topik 01 : Basa Basi Untuk Bertanya Kabar</div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <!-- Welcome, Now You Are Nusian !<br> -->
          <!-- Thank You For Choose Nusia To Learning Bahasa. -->
          <p>
            Tujuan Pembelajaran: Setelah menyelesaikan pembelajaran ini, pembelajar
            akan dapat memahami tuturan dari lawan bicara dalam konteks   basa-basi
            untuk bertanya kabar.
          </p>
          <br>
          <div class="container mt-5">
              <ul class="list-group list-group-horizontal justify-content-center">
                  <li class="list-group-item flex-fill step-item">Langkah 1</li>
                  <li class="list-group-item flex-fill step-item">Langkah 2</li>
                  <li class="list-group-item flex-fill step-item">Langkah 3</li>
                  <li class="list-group-item flex-fill step-item">Langkah 4</li>
              </ul>
          </div>

          <div>
  <!-- Steps -->
  <ul class="stepper" id="stepper-form-example" data-mdb-stepper-linear="true">
    <form class="needs-validation stepper-form">
      <!-- First step -->
      <li class="stepper-step stepper-active">
        <div class="stepper-head">
          <span class="stepper-head-icon">1</span>
          <span class="stepper-head-text">step1</span>
        </div>
        <div class="stepper-content py-3">
          <div class="form-outline mb-4">
            <input type="text" id="stepper-form-first-name" class="form-control" required/>
            <label class="form-label" for="stepper-form-first-name">First name<small class="text-muted">(required)</small></label>
            <div class="invalid-feedback">invalid</div>
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="stepper-form-last-name" class="form-control" required/>
            <label class="form-label" for="stepper-form-last-name">Last name<small class="text-muted">(required)</small></label>
            <div class="invalid-feedback">invalid</div>
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="stepper-form-last-name" class="form-control" />
            <label class="form-label" for="stepper-form-last-name">Nickname<small class="text-muted">(optional)</small></label>
          </div>
        </div>
      </li>
      <!-- First step -->

      <!-- Second step -->
      <li class="stepper-step">
        <div class="stepper-head">
          <span class="stepper-head-icon">2</span>
          <span class="stepper-head-text">step2</span>
        </div>
        <div class="stepper-content py-3">
          <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" required />
            <label class="form-label" for="form6Example3">Company name<small class="text-muted">(required)</small></label>
            <div class="invalid-feedback">invalid</div>
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" required />
            <label class="form-label" for="form6Example4">Address<small class="text-muted">(required)</small></label>
            <div class="invalid-feedback">invalid</div>
          </div>

          <div class="form-outline mb-4">
            <input type="email" id="form6Example5" class="form-control" required />
            <label class="form-label" for="form6Example5">Email<small class="text-muted">(required)</small></label>
            <div class="invalid-feedback">invalid</div>
          </div>

          <div class="form-outline mb-4">
            <input type="number" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6">Phone<small class="text-muted">(optional)</small></label>
            <div class="invalid-feedback">invalid</div>
          </div>
        </div>
      </li>
      <!-- Second step -->

      <!-- Third step -->
      <li class="stepper-step">
        <div class="stepper-head">
          <span class="stepper-head-icon">3</span>
          <span class="stepper-head-text">step3</span>
        </div>
        <div class="stepper-content py-3">
          <div class="form-outline mb-4">
            <textarea class="form-control" id="form6Example7" rows="4"></textarea>
            <label class="form-label" for="form6Example7">Additional information</label>
          </div>

          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked/>
            <label class="form-check-label" for="form6Example8">Create an account?</label>
          </div>

          <button type="submit" class="btn btn-success btn-block mb-4">Place order</button>
        </div>
      </li>
      <!-- Third step -->
    </form>
  </ul>
  <!-- Steps -->

  <!-- Buttons -->
  <div class="d-flex justify-content-center px-3">
    <button id="form-example-prev-step" class="btn btn-primary w-100 me-2">Previous step</button>
    <button id="form-example-next-step" class="btn btn-primary w-100">Next step</button>
  </div>
  <!-- Buttons -->
</div>
          <br>
          <br>
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation" style="color: black !important;">
              <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true" style="color: black !important;">
                Pelajaran
              </a>
            </li>
            <li class="nav-item" role="presentation" style="color: black !important;">
              <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false" style="color: black !important;">
                Ayo Simak-ulang !
              </a>
            </li>
            <li class="nav-item" role="presentation" style="color: black !important;">
              <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false" style="color: black !important;">
                Latihan Menyimak
              </a>
            </li>
          </ul>
          <div class="tab-content pt-3" id="tab-content" style="margin-bottom: 10px; min-height: 500px;">
            <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
              <p>menggunakan nearpod</p>
            </div>
            <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
              <ol>
                <li>klik tombol ini</li>
                <li>dengarkan rekaman audionya</li>
                <li>ulangi, lalu rekam dengan menekan tombol ini</li>
                <li>bandingkan rekaman dengan audio asli</li>
                <li>jika ada perbedaan, silahkan ulangi lagi dengan menentukan tombol ini.</li>
                <li>setelah selesai, silahkan lanjut kehalaman berikutnya</li>
              </ol>
              <span>sebelum menonton, ada instruksi yang bisa diterjemahkan ke dalam bahasa inggris Youtube</span>
              <br>
              <br>
              <span>sebelum menonton, ada instruksi yang bisa diterjemahkan ke dalam bahasa inggris dengarlah
                simakan dengan tempo normal di bawah ini. lalu ulang via nearpod!
              </span>
            </div>
            <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
              <p>Mengerjakan soal latihan mnenyimak via Quizizz!</p>
              <p>Rating Bahan Ajar</p>
              <span>
                Bagaimana menurutmu tentang materi ini?
                (bintang  atau yang merepresentasikan itu)
              </span>
            </div>
          </div>
        </div>
      </div>

      
    </div>

  </div>
  <!-- Procedure -->

  <!-- <div class="row justify-content-center">
    <div class="col-8 mt-5">
      <div class="card">
        <div class="card-body">
          <a href="/materi">Link Untuk Materi</a>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="row justify-content-center">
    <div class="col-md-8">
      <ul>
        <li><a href="/topic">Topik</a></li>
      </ul>
    </div>
  </div> -->

  <div style="margin: 100px"></div>
  @endif
</div>
<style>
  .nav-link.active {
    background-color: #ebebeb !important; /* Mengubah background menjadi biru */
    color: white !important; /* Mengubah teks menjadi putih */
  }
</style>

<style>
  .step-item {
    border-radius: 50%!important; /* Membuat bentuk bulat */
    background-color: #007bff!important; /* Warna biru Bootstrap */
    color: white!important; /* Warna teks putih */
    text-align: center; /* Pusatkan teks */
    width: 40px; /* Atur lebar */
    height: 40px; /* Atur tinggi */
    padding: 5px 0!important; /* Atur padding atas dan bawah */
    margin-right: 10px; /* Jarak antar item */
    display: flex;
    justify-content: center;
    align-items: center;
}

.list-group-horizontal .list-group-item {
    display: inline-flex; /* Agar item dapat berbaris horizontal */
}

.list-group-item {
    border: none!important; /* Menghilangkan border */
}
</style>
@endsection