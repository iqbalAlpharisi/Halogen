<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah feature</title>
    <link rel="icon" href="/IMG/ico.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('admin/feature')?>" >Feature</a>
    </div>
</nav>

<div class="container">
    <h1 class="mt-5">Tambah feature</h1>
    <form action="<?= site_url('admin/feature_store/'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="feature">Deskirpsi :</label>
            <textarea id="feature" name="desc" rows="4" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="feature">isi :</label>
            <textarea id="feature" name="isi" rows="4" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="foto">Thumbnail :</label>
            <input type="file" name="thumbnail" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<!-- Memuat Bootstrap JS (jika diperlukan) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
