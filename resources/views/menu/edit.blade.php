@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Menu</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('menu.index') }}"> Kembali</a>
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

    <form action="{{ route('menu.update',$menu->id_menu) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id menu:</strong>
                    <input type="text" name="id_menu" class="form-control" placeholder="Id Menu"value="{{ $menu->id_menu }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar Menu:</strong>
                    <input type="image" name="image" value="{{ $menu->image }}" class="form-control" placeholder="Gambar Menu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                    <select class="form-control" id="kategori-option" name="id_kategori">
                        @foreach ($kategori as $kat)
                            <option value="{{ $kat->id_kategori }}" {{ $menu->id_kategori == $kat->id_kategori ? 'selected' : '' }}>
                                {{ $kat->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Menu:</strong>
                    <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="form-control" placeholder="Nama Menu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{ $menu->harga }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Content">{{ $menu->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </form>
@endsection
