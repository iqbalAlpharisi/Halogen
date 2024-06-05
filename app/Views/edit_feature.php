<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit feature</title>
    <link rel="icon" href="/IMG/ico.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('admin/feature')?>" >FEATURE</a>
    </div>
</nav>

<div class="row container">
    
    <div class="col-6 pl-5">
    <h1 class="mt-5">Edit feature</h1>
        <form action="<?= site_url('admin/update_feature/' . $feature['id']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" class="form-control" value="<?= $feature['judul']; ?>">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi :</label>
                <textarea id="desc" name="desc" rows="4" class="form-control"><?= $feature['desc']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="isi">Isi Feature :</label>
                <textarea id="isi" name="isi" rows="4" class="form-control"><?= $feature['isi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Thumnail :</label>
                <input type="file" name="thumbnail" class="form-control" value="<?= $feature['judul']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <div class="col-6 pl-5 pt-5">
        <h3>Thumbnail</h3>
    <img src="<?= base_url('/IMG/feature/' .$feature['thumbnail'])?>" height="500px" width="500px" alt="gambar">
    </div>
</div>

<!-- Memuat Bootstrap JS (jika diperlukan) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
