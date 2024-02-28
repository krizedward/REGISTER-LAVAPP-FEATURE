@extends('layouts.app')

@section('content')
<div class="container">
  @if (Auth::user()->role == 'admin')
  <ul>
    <li>total user</li>
    <li>user yang mendaftar hari ini</li>
  </ul>
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
          " src="/images/procedure.png">
          <p style="
            font-style: normal; 
            font-weight: 400;
            font-size: 12px;
            line-height: 150%;
            color: #1E1E1E;">
            @lang('home.procedure.intro')
          <ol style="
            font-style: normal; 
            font-weight: 400;
            font-size: 12px;
            line-height: 150%;
            color: #1E1E1E;">
            <li>@lang('home.procedure.step-1')</li>
            <li>@lang('home.procedure.step-2')</li>
            <li>@lang('home.procedure.step-3')</li>
            <li>@lang('home.procedure.step-4')</li>
            <li>@lang('home.procedure.step-5')</li>
            <li>@lang('home.procedure.step-6')</li>
            <li>@lang('home.procedure.step-7')</li>
          </ol>
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-7 mb-4">
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
@endsection