@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Pesanan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('pesanan.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Pesanan:</strong>
                {{ $pesanan->id_pesanan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pelanggan:</strong>
                {{ $pesanan->pelanggan->nama_pelanggan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pesanan:</strong>
                {{ $pesanan->tggl_pesanan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Harga:</strong>
                {{ $pesanan->total_harga }}
            </div>
        </div>
    </div>
@endsection