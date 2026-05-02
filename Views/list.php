<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
                <h5 class="mb-0 fw-bold">Data Stok Barang Toko</h5>
                <a href="index.php?action=create" class="btn btn-light btn-sm fw-bold text-primary">+ Tambah Data</a>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle text-center mb-0">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">ID</th>
                                <th class="text-start">Nama Barang</th>
                                <th>Harga</th>
                                <th width="10%">Stok</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($barang as $row): ?>
                            <tr>
                                <td class="fw-bold text-secondary"><?= $row['id'] ?></td>
                                <td class="text-start fw-semibold"><?= htmlspecialchars($row['nama_barang']) ?></td>
                                <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                                <td>
                                    <span class="badge bg-<?= $row['stok'] > 10 ? 'success' : 'danger' ?> px-3 py-2">
                                        <?= htmlspecialchars($row['stok']) ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm fw-bold text-white">Edit</a>
                                    <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>