@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Pesanan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('pesanan.index') }}"> Kembali</a>
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

    <form action="{{ route('pesanan.update',$pesanan->id_pesanan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pesanan:</strong>
                    <input type="text" name="id_pesanan" class="form-control" placeholder="Id Pesanan" value="{{ $pesanan->id_pesanan }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pelanggan:</strong>
                    <select class="form-control" id="pelanggan-option" name="id_pelanggan">
                        @foreach ($pelanggan as $pel)
                            <option value="{{ $pel->id_pelanggan }}" {{ $pesanan->id_pelanggan == $pel->id_pelanggan ? 'selected' : '' }}>
                                {{ $pel->nama_pelanggan }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Pesanan:</strong>
                    <input type="date" name="tggl_pesanan" class="form-control" placeholder="Tanggal Pesanan" value="{{ $pesanan->tggl_pesanan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Harga:</strong>
                    <input type="number" name="total_harga" class="form-control" placeholder="Total Harga" value="{{ $pesanan->total_harga }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </form>
@endsection