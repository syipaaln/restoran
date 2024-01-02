@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Pelanggan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('pelanggan.index') }}"> Kembali</a>
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

    <form action="{{ route('pelanggan.update',$pelanggan->id_pelanggan) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pelanggan:</strong>
                    <input type="text" name="id_pelanggan" class="form-control" placeholder="Id Pelanggan"value="{{ $pelanggan->id_pelanggan }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pelanggan:</strong>
                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" value="{{ $pelanggan->nama_pelanggan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Pelanggan:</strong>
                    <input type="text" name="alamat_pelanggan" value="{{ $pelanggan->alamat_pelanggan }}" class="form-control" placeholder="alamat pelanggan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telepon:</strong>
                    <input type="number" name="no_telpon" class="form-control" placeholder="No Telepon" value="{{ $pelanggan->no_telpon }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </form>
@endsection
