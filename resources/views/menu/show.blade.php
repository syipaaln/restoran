@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Menu</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('menu.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id menu:</strong>
                {{ $menu->id_menu }}
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{-- <strong>Gambar menu:</strong> --}}
                <img src="{{ asset('/image/'.$menu->foto) }}" alt="Foto Menu" width="120px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $menu->kategori->nama_kategori }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Menu:</strong>
                {{ $menu->nama_menu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                {{ $menu->harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $menu->deskripsi }}
            </div>
        </div>
    </div>
@endsection