@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, Now You Are Nusian !<br> 
                    Thank You For Choose Nusia To Learning Bahasa.
                    <br>
                </div>
            </div>
        </div>
        
    </div>
    @if (Auth::user()->role == 'user')
    <div class="row justify-content-center">
        <div class="col-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <a href="/materi">Link Untuk Materi</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
