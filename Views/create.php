<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0">
                    <div class="card-header bg-success text-white py-3">
                        <h5 class="mb-0 fw-bold text-center">Tambah Barang Baru</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="index.php?action=store" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang..." required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">Harga (Rp)</label>
                                <input type="number" name="harga" class="form-control" placeholder="Contoh: 15000" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold text-secondary">Stok Awal</label>
                                <input type="number" name="stok" class="form-control" placeholder="Jumlah stok..." required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success fw-bold py-2">Simpan Data</button>
                                <a href="index.php" class="btn btn-light text-secondary fw-bold">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>