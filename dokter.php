<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">My Dokter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link mb-2" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link mb-2" aria-current="page">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a href="pasien.php" class="nav-link mb-2" aria-current="page">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a href="kunjungan.php" class="nav-link mb-2" aria-current="page">Kunjungan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-3">
        <div class="col-sm">
            <h3>Tabel Dokter</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="tambahdokter.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Spesialisasi</th>
                        <th>No Telp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                 <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM dokter");
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['idDokter']); ?></td>
                        <td><?= htmlspecialchars($row['nmDokter']); ?></td>
                        <td><?= htmlspecialchars($row['spesialisasi']); ?></td>
                        <td><?= htmlspecialchars($row['noTelp']); ?></td>
                        <td>
                            <a href="editdokter.php?edit=<?= $row['idDokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return hapus('<?= $row['idDokter']; ?>')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambahkan script di bagian akhir body -->
<script>
    function hapus(id) {
        if (confirm('Yakin?')) {
            window.location.href = 'koneksi.php?idDokter=' + id;
        } else {
            return false;
        }
    }
</script>

<!-- Bootstrap JS (opsional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-wjkd/rQhrp6+6jYTCmZG9IHFovR7rKiXMfHldtaGbcVKrKmvCkAa/euFvlUeyXc4" crossorigin="anonymous"></script>

</body>
</html>