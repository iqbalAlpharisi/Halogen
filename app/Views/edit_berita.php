<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit berita</title>
    <link rel="icon" href="/IMG/ico.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('admin/berita')?>" >Berita</a>
    </div>
</nav>

<div class="row container">
    
    <div class="col-6 pl-5">
    <h1 class="mt-5">Edit berita</h1>
        <form action="<?= site_url('admin/update_berita/' . $berita['id']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" class="form-control" value="<?= $berita['judul']; ?>">
            </div>
            <div class="form-group">
                <label for="berita">berita:</label>
                <textarea id="berita" name="berita" rows="4" class="form-control"><?= $berita['berita']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="berita">isi berita:</label>
                <textarea id="isi" name="isi" rows="4" class="form-control"><?= $berita['isi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Thumnail:</label>
                <input type="file" name="foto" class="form-control" value="<?= $berita['judul']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <div class="col-6 pl-5 pt-5">
        <h3>Thumbnail</h3>
    <img src="<?= base_url('/IMG/' .$berita['foto'])?>" height="500px" width="500px" alt="gambar">
    </div>
</div>

<!-- Memuat Bootstrap JS (jika diperlukan) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
