<!-- resources/views/pesanan/receipt.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pesanan</title>
    <!-- Tambahkan stylesheet jika diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .receipt {
            border: 1px solid #ccc;
            padding: 10px;
            max-width: 300px;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .details {
            margin-top: 10px;
        }

        .item {
            margin-top: 10px;
        }

        .total {
            margin-top: 10px;
            font-weight: bold;
        }

        /* Optional: tambahkan garis di antara setiap item untuk memisahkan informasi */
        .item, .total {
            border-top: 1px solid #ccc;
            padding-top: 5px;
        }
    </style>
</head>
<body>
    <h2>Struk Pesanan</h2>

    <p><strong>No Pesanan:</strong> {{ $pesanan->id_pesanan }}</p>
    <p><strong>Tanggal Pesanan:</strong> {{ $pesanan->tggl_pesanan }}</p>
    <p><strong>Pelanggan:</strong> {{ $pesanan->pelanggan->nama_pelanggan }}</p>
    <p><strong>Menu:</strong> {{ $pesanan->menu->nama_menu }}</p>
    <p><strong>Harga:</strong> {{ $pesanan->menu->harga }}</p>
    <p><strong>Jumlah:</strong> {{ $pesanan->jumlah }}</p>
    <p><strong>Total Harga:</strong> {{ $pesanan->total_harga }}</p>

    <!-- Tambahkan informasi lain sesuai kebutuhan -->

    <!-- Tambahkan styling atau layout sesuai kebutuhan -->
</body>
</html>
