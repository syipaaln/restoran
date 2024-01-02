@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Detail Pesanan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('detailpesanan.index') }}"> Kembali</a>
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

    <form action="{{ route('detailpesanan.update',$detailpesanan->id_detail) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Detail Pesanan:</strong>
                    <input type="text" name="id_detail" class="form-control" placeholder="Id Detail Pesanan" value="{{ $detailpesanan->id_detail }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pesanan:</strong>
                    <select class="form-control" id="pelanggan-option" name="id_pesanan">
                        @foreach ($pesanan as $pesan)
                            <option value="{{ $pesan->id_pesanan }}" {{ $detailpesanan->id_pesanan == $pesan->id_pesanan ? 'selected' : '' }}>
                                {{ $pesan->id_pesanan }}
                            </option>
                        @endforeach
                     </select>
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Menu:</strong>
                    <input type="text" name="id_menu" class="form-control" placeholder="Id Menu" value="{{ $detailpesanan->id_menu }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Menu:</strong>
                    <select class="form-control" id="menu-option" name="id_menu">
                        @foreach ($menu as $menu)
                            <option value="{{ $menu->id_menu }}" {{ $detailpesanan->id_menu == $menu->id_menu ? 'selected' : '' }}>
                                {{ $menu->nama_menu }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Pesanan:</strong>
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Pesanan" value="{{ $detailpesanan->jumlah }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subtotal Harga:</strong>
                    <input type="number" name="subtotal" class="form-control" placeholder="Subtotal Harga" value="{{ $detailpesanan->subtotal }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </form>
@endsection