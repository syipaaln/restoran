@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Kategori</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('kategori.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kategori.update',$kategori->id_kategori) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id kategori:</strong>
                    <input type="text" name="id_kategori" class="form-control" placeholder="Id Kategori" value="{{ $kategori->id_kategori }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kategori:</strong>
                    <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="{{ $kategori->nama_kategori }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </form>
@endsection