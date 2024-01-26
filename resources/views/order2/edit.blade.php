@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Order</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('order2.index') }}"> Back</a>
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

    <form action="{{ route('order2.update',$order2->id_pesan) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pesan:</strong>
                    <input type="text" name="id_pesan" class="form-control" placeholder="Id Pesan" value="{{ $order2->id_pesan }}">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pesanan:</strong>
                    <input type="text" name="nm_pesanan" class="form-control" placeholder="Nama Pesanan" value="{{ $order2->nm_pesanan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Pesanan:</strong>
                    <input type="number" name="jmlh_pesanan" class="form-control" placeholder="Jumlah Pesanann" value="{{ $order2->jmlh_pesanan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Pesanan:</strong>
                    <input type="date" name="tgl_pesanan" value="{{ $order2->tgl_pesanan }}" class="form-control" placeholder="Tanggal Pesanan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Content">{{ $order2->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection
