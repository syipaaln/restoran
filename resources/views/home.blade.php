@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a> --}}
    {{-- <?php   
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Login Berhasil")';  
        echo '</script>';
    ?> --}}
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('pengguna')}}">Halaman Pengguna</a>
        </li>
    </ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ __('Berhasil login') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                
                <div class="card-body">
                    

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
