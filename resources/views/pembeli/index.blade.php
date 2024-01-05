@extends('layouts.main')

@section('contents')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="container">
        <h2>Selamat Datang Pembeli</h2>
        <form action="/logout" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>
    </div>
@endsection