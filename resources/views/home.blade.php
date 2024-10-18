<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Aplikasi Pemesanan Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .menu-card {
            transition: transform 0.2s;
        }

        .menu-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selamat Datang di Aplikasi Pemesanan Makanan</h1>
        <p class="text-center">Silakan pilih menu di bawah ini untuk melakukan pemesanan.</p>
        
        <div class="text-center mb-4">
            <a href="{{ route('menus.index') }}" class="btn btn-primary">Lihat Menu</a>
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Lihat Pesanan</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Menu Terbaru</h2>
            </div>

            <div class="col-md-4">
                <div class="card menu-card mb-4">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/150x150/webp/photo/p2/222/2024/04/20/43-159524852.jpg" class="card-img-top" alt="Nasi Goreng">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Goreng</h5>
                        <p class="card-text">Nasi goreng spesial dengan ayam, telur, dan sayuran.</p>
                        <a href="{{ route('menus.create') }}" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card mb-4">
                    <img src="https://blog.tokowahab.com/wp-content/uploads/2020/03/Resep-Ayam-Bakar-Taliwang-150x150.jpg" class="card-img-top" alt="Ayam Bakar">
                    <div class="card-body">
                        <h5 class="card-title">Ayam Bakar</h5>
                        <p class="card-text">Ayam bakar dengan bumbu khas, disajikan dengan sambal.</p>
                        <a href="{{ route('menus.create') }}" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card mb-4">
                    <img src="https://jeda.id/files/2021/04/sate-apus-jeda-150x150.jpg" class="card-img-top" alt="Sate">
                    <div class="card-body">
                        <h5 class="card-title">Sate</h5>
                        <p class="card-text">Sate daging yang dibakar dengan bumbu kacang.</p>
                        <a href="{{ route('menus.create') }}" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>