<html>
<head>
   <title>My App | Halaman Utama</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<body>
   <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <div class="container-fluid">
               <a href="pasien.php" class="navbar-brand">My App</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toogle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                           <a href="pasien.php" class="nav-link" aria-current="page">Pasien</a>
                       </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link" aria-current="page">Dokter</a>
                       </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link" aria-current="page">Kunjungan</a>
                       </li>
                   </ul>
               </div>
           </div>
       </nav>
       <div class="row mt-3">
           <div class="col-sm">
               <h3>Tabel Kunjungan</h3>
           </div>
       </div>
       <div class="row">
           <div class="col">
               <a href="tambahkunjungan.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
           </div>
       </div>
       <div class="row mt-3">
           <div class="col">
               <table class="table table-striped table-hover tabel-sm">
                   <tr>
                       <th>No</th>
                       <th>ID Kunjungan</th>
                       <th>ID Pasien</th>
                       <th>ID Dokter</th>
                       <th>Tanggal</th>
                       <th>Keluhan</th>
                   </tr>
                   <?php
                   foreach ($isiTabelKunjungan as $data) {
                   ?>
                       <tr>
                           <td><?= $no++; ?></td>
                           <td><?= $data['idKunjungan']; ?></td>
                           <td><?= $data['idPasien']; ?></td>
                           <td><?= $data['idDokter']; ?></td>
                           <td><?= $data['tanggal']; ?></td>
                           <td><?= $data['keluhan']; ?></td>
                           <td><a href="editkunjungan.php?edit=<?= $data['idKunjungan']; ?>" class="btn btn-warning btn-sm">Edit </a><a href="koneksi.php?idKunjungan=<?= $row['idKunjungan']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                       </tr>
                   <?php } ?>
               </table>
           </div>
       </div>
   </div>
</body>


</html>