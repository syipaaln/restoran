@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah Pesanan</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('pesanan.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pesanan.store') }}" method="POST">
    @csrf

    <div class="row">
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Pesanan:</strong>
                <input type="text" name="id_pesanan" class="form-control" placeholder="Id pesanan">
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pesanan:</strong>
                <input type="date" name="tggl_pesanan" class="form-control" placeholder="Tanggal Pesanan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pelanggan:</strong>
                <select class="form-control" id="pelanggan-option" name="id_pelanggan">
                    <option>Pilih Pelanggan</option>
                    @foreach ($pelanggan as $pel)
                        <option value="{{ $pel->id_pelanggan }}">{{ $pel->nama_pelanggan }}</option>
                    @endforeach
                 </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Menu:</strong>
                <select class="form-control" id="menu-option" name="id_menu">
                    <option value="">Pilih menu</option>
                    @foreach ($menu as $menu)
                        <option value="{{ $menu->id_menu }}" data-harga="{{ $menu->harga }}">{{ $menu->nama_menu }}</option>
                    @endforeach
                 </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah:</strong>
                <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Harga:</strong>
                <input type="number" id="total_harga" name="total_harga" class="form-control" placeholder="Total Harga" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>

</form>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // Mendapatkan elemen select
    var pilihMenu = document.getElementById("menu-option");
    var pilihPelanggan = document.getElementById("pelanggan-option");

    // Menandai opsi yang akan dinonaktifkan
    var optionsToDisable = [0]; // Misalnya, nonaktifkan opsi pertama (indeks 0)

    // Mengonfigurasi opsi yang akan dinonaktifkan
    optionsToDisable.forEach(function(index) {
        pilihMenu.options[index].disabled = true;
        pilihPelanggan.options[index].disabled = true;
    });

    $(document).ready(function () {
        // Fungsi untuk mengisi otomatis harga berdasarkan pilihan menu
        // function isiOtomatisHarga() {
        //     var IdMenu = $('#menu-option').val();

        //     // Lakukan request Ajax untuk mendapatkan harga dari menu
        //     $.ajax({
        //         type: 'GET',
        //         url: '/get-harga/' + IdMenu, // Sesuaikan dengan route yang Anda buat
        //         success: function (data) {
        //             // Tetapkan harga ke input harga
        //             $('#harga').val(data.harga);
        //             hitungSubTotal(); // Panggil fungsi hitungTotal jika diperlukan
        //         },
        //         error: function (error) {
        //             console.log(error);
        //         }
        //     });
        // }

        $('#menu-option').on('change', function() {
            const selected = $(this).find('option:selected');
            const harga = selected.data('harga'); 

            $("#harga").val(harga);
        });

        // Fungsi untuk menghitung subtotal saat mengubah nilai input jumlah atau harga
        function hitungTotal() {
            var jumlah = parseFloat($('#jumlah').val()) || 0;
            var harga = parseFloat($('#harga').val()) || 0;
            var total_harga = jumlah * harga;

            $('#total_harga').val(total_harga.toFixed());
            // $('#subtotal').val(subtotal.toFixed(2)); ini buat ada ...,00
        }

        // Panggil fungsi isiOtomatisHarga saat nilai input menu_id berubah
        // $('#id_menu').on('change', function () {
        //     isiOtomatisHarga();
        // });

        // Panggil fungsi hitungTotal saat nilai input jumlah atau harga berubah
        $('#jumlah, #harga').on('input', function () {
            hitungTotal();
        });
    });
</script>
@endsection