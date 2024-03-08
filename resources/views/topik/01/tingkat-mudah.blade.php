@extends('layouts.app')

@section('content')
<div class="container">
  @if (Auth::user()->role == 'user')
  <div class="row justify-content-center">
    <div class="col-md-10 mb-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a style="text-decoration: none;" href="/home">Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Topik 01 / Tingkat Mudah
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- dashboard -->

  <div class="row justify-content-center">

    <div class="col-md-10 mb-2">
      <div class="card mb-4">
        <div class="card-header theme-style">Topik 01 : Basa Basi Untuk Bertanya Kabar</div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <p class="tujuan mb-5">
            Tujuan Pembelajaran: Setelah menyelesaikan pembelajaran ini, pembelajar
            akan dapat memahami tuturan dari lawan bicara dalam konteks basa-basi
            untuk bertanya kabar.
          </p>
          <div class="container mb-5">
            <ul class="list-group list-group-horizontal justify-content-center text-center">
              <li class="list-group-item flex-fill step-item theme-style">
                <a href="/topik/1/tingkat-mudah" style="color: white; text-decoration: none;">
                  Tingkat Dasar
                </a>  
              </li>
              <li class="list-group-item flex-fill step-item">
                <a href="/topik/1/tingkat-menengah" style="color: black; text-decoration: none;">
                  Tingkat Menengah
                </a>
              </li>
              <li class="list-group-item flex-fill step-item">
                <a href="/topik/1/tingkat-mahir" style="color: black; text-decoration: none;">
                  Tingkat Mahir
                </a>
              </li>
              <!-- <li class="list-group-item flex-fill step-item">Langkah 4</li> -->
            </ul>
          </div>

          <div style="margin: 11px;"> 
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item" role="presentation" style="color: black !important;">
                <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab"
                  aria-controls="simple-tabpanel-0" aria-selected="true" style="color: black !important;">
                  <!-- Pelajaran -->
                  Materi
                </a>
              </li>
              <li class="nav-item" role="presentation" style="color: black !important;">
                <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab"
                  aria-controls="simple-tabpanel-1" aria-selected="false" style="color: black !important;">
                  Ayo Simak-ulang !
                </a>
              </li>
              <li class="nav-item" role="presentation" style="color: black !important;">
                <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab"
                  aria-controls="simple-tabpanel-2" aria-selected="false" style="color: black !important;">
                  Latihan Menyimak
                </a>
              </li>
            </ul>
            <div class="tab-content pt-3" id="tab-content" style="margin-bottom: 10px; min-height: 500px;">
              <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
                <!-- <p>menggunakan nearpod</p> -->
                @include('topik.01.konten.mudah-materi')
              </div>
              <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                @include('topik.01.konten.mudah-simak')
              </div>
              <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
                <!-- <p>Mengerjakan soal latihan mnenyimak via Quizizz!</p> -->
                @include('topik.01.konten.mudah-latihan')
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
    @endif
  </div>
  <style>
  .nav-link.active {
    background-color: #ebebeb !important;
    /* Mengubah background menjadi biru */
    color: white !important;
    /* Mengubah teks menjadi putih */
  }

  p {
    font-style: normal;
    font-weight: 500;
    line-height: 30px;
  }

  .tujuan {
    margin-left: 10px;
  }
  </style>
  @endsection