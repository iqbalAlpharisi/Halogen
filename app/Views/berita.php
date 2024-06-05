<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Berita</title>
    <!-- Memuat Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css" />
    <link rel="icon" href="/IMG/ico.png" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Berita</a>
        <a class="nav-link" href="<?= site_url('admin/feature') ?>"> <div class="nav-item navbar-brand text-light">Feature</div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
    </div>
    
    
    <a class="nav-link" href="<?= site_url('/logout') ?>"><div class="nav-item navbar-brand text-light">Log out</div></a>
    
</nav>



<div class="container-fluid mt-4">
<a href="<?= site_url('admin/isi_berita') ?>"><button class="btn btn-dark mb-4" >Tambah Berita Baru</button></a>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Action</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($berita as $key) : ?>
                        <tr>
                            <td><?php echo $key['id'] ?></td>
                            <td><?php echo $key['judul'] ?></td>
                            <td><?php echo $key['berita'] ?></td>
                            <td><?php echo $key['isi'] ?></td>
                            <td><img src="<?php echo "/IMG/" . $key['foto']; ?>" height="100px" width="100px" alt="gambar"></td>
                            <td>
                                <a href="<?= site_url('admin/edit_berita/' . $key['id']) ?>" class="btn btn-primary">Edit</a>
                                <a href="<?= site_url('admin/delete_berita/' . $key['id']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                            <td><?php echo $key['date'] ?> - <?php echo $key['waktu'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Memuat jQuery (diperlukan oleh Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Memuat Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
