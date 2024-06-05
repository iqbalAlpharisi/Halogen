<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="IMG/ico.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans&family=Salsa&display=swap"
      rel="stylesheet"
    />
    <title>Selamat Datang !</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm sticky-top">
      <a class="navbar-brand" href="<?= site_url('') ?>">
        <img
          src="img/cover.png"
          alt="Logo"
          width="100"
          height="40"
          class="d-inline-block align-text-top"
      /></a>


        <div class="navbar-nav col-6" >
          <a href="<?= site_url('') ?>" class="nav-item nav-link">Home</a>
          <a href="<?= site_url('/main') ?>" class="nav-item nav-link">News</a>
          <a href="<?= site_url('/review') ?>" class="nav-item nav-link">Review</a>
</div>

    <div class="navbar-nav col-6 d-flex justify-content-center">
          <a href="<?= site_url('/subscribe') ?>">
            <button type="button" class="btn btn-dark rounded-0 ">SUBSCRIBE</button>
          </a>
          <a href="<?= site_url('/login') ?>">
            <i class="bi bi-person-lines-fill logprofile"></i>
          </a>
        </div>
    </nav>

    <div class="card p-0 text-white">
      <img src="IMG/banner.jpg" class="card-img rounded-0 cover" alt="banner" />
      <div class="card-img-overlay text-center">
        <h3 class="card-title text-center">Selamat Datang<br />Halogen</h3>
        <p class="card-text">Laman Automotive No.1 Di Indonesia</p>
        <a href="<?= site_url('/login') ?>">
        <button type="button" class="btn btn-dark btn-lg" id="sign">
          Sign In
        </button>
        </a>
      </div>
    </div>

    <div class="tentang container">
      <h2 class="text-center fw-bold">Tentang Kami</h2>
      <p class="text-center">
        Halogen adalah Situs Berita yang menyajikan berita, ulasan, dan artikel
        terkini seputar otomotif, termasuk mobil, motor, dan inovasi terkait.
        Dengan fokus pada informasi terpercaya dan gaya yang dinamis, Halogen
        memenuhi kebutuhan penggemar kendaraan dari berbagai latar belakang.
        Situs ini menawarkan liputan mendalam dan terpercaya tentang model dan
        merek terkemuka, serta mengulas tren terbaru dan teknologi inovatif
        dalam industri otomotif.
      </p>
    </div>

    <div class="container" id="layout">
      <div class="row">
        <div class="col-6">
          <span class="photo1 container">
            <img src="IMG/v3.jpg" class="photo1" alt="photo1" />
          </span>
          <span class="photo2 container">
            <img src="IMG/v2.jpg" class="photo2" alt="photo1" />
          </span>
          <span class="photo3 container">
            <img src="IMG/v1.jpg" class="photo3" alt="photo1" />
          </span>
        </div>

        <div class="textlay col-6">
          <div class="container-fluid">
            <p>
            <i class="bi bi-check-circle"></i>
              Halogen menyajikan informasi otomotif terkini secara cepat,
              akurat, dan terpercaya.
            </p>
            <p>
            <i class="bi bi-check-circle"></i>
              Tersedia Community Tab untuk saling berdiskusi mengenai automotive
            </p>
            <p>
            <i class="bi bi-check-circle"></i>
              Membagi Tips dan Trik, Seputar Dunia Automotive
            </p>
            <p>
            <i class="bi bi-check-circle"></i>
              Berlangganan dengan kami dan nikmati berbagai fitur lainnya
            </p>
          </div>
          <div class="container" id="mulai">
            <button type="button" class="btn btn-dark btn-lg rounded-0">
              Mulai Sekarang
            </button>
          </div>
        </div>
      </div>
    </div>

    
    <div class="beritabaru container-fluid">
      <h3 class="text-center fw-bold">BERITA TERBARU</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        
      <?php if (!empty($berita) && is_array($berita)): ?>
        <?php
            $news1 = isset($berita[0]) ? $berita[0] : null;
            $news2 = isset($berita[1]) ? $berita[1] : null;
            $news3 = isset($berita[2]) ? $berita[2] : null;
        ?>

      
      <?php if ($news1): ?>
        
        <div class="col py-3 rounded-3 my-0">
          <div class="card h-100">
          <a href="<?= site_url('detail/' . $news1['id']) ?>">
            <img src="<?= base_url('IMG/' . $news1['foto']) ?>" class="card-img-top" alt="..." />
          </a>
            <div class="card-body">
              <h5 class="card-title"><?= esc($news1['judul']) ?></h5>
              <p class="card-text">
                <?= esc($news1['berita']) ?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated : <?= esc($news1['date']) ?></small>
            </div>
          </div>
        </div>
        </a>  
      <?php endif; ?>
     

      <?php if ($news2): ?>
        <div class="col py-3 rounded-3 my-0">
          <div class="card h-100">
          <a href="<?= site_url('detail/' . $news2['id']) ?>">
            <img src="<?= base_url('IMG/' . $news2['foto']) ?>" class="card-img-top" alt="..." />
          </a>
            <div class="card-body">
              <h5 class="card-title"><?= esc($news2['judul']) ?></h5>
              <p class="card-text">
                <?= esc($news2['berita']) ?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated <?= esc($news1['date']) ?></small>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($news3): ?>
        <div class="col py-3 rounded-3 my-0">
          <div class="card h-100">
          <a href="<?= site_url('detail/' . $news3['id']) ?>">
            <img src="<?= base_url('IMG/' . $news3['foto']) ?>" class="card-img-top" alt="..." />
          </a>
            <div class="card-body">
              <h5 class="card-title"><?= esc($news3['judul']) ?></h5>
              <p class="card-text">
                 <?= esc($news3['berita']) ?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated <?= esc($news3['date']) ?></small>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>


<div class="medsos container-fluid bg-dark justify-content-around d-flex ">
<i class="bi bi-instagram"></i> 
<i class="bi bi-facebook"></i>
<i class="bi bi-whatsapp"></i>
<i class="bi bi-pinterest"></i>
<i class="bi bi-youtube"></i>
<i class="bi bi-twitter-x"></i>
<i class="bi bi-linkedin"></i>
</div>

<footer class="no-padding ">
      <nav class="navbar navbar-light">
        <div class="container my-4">
          <div class="row mt-2">
            
          <div class="col-6">
              <a class="navbar-brand p-0" href="<?= site_url('admin/beritamin') ?>">
                <img
                  src="IMG/cover.png"
                  alt="logo"
                  width="100"
                  height="40"
                  class="position-absolute"
                />
              </a>
              <p class="px-3">Halogen berkomitmen untuk menyediakan berita terkini, ulasan mendalam, dan analisis tajam dari berbagai topik seputar Otomotif yang relevan dan menarik bagi pembaca kami./p>
          </div>

          <div class="col-3">
            <h5>About</h5>
           
              <li>Security FAQs</li>
              <li>Help Center</li>
              <li>Komunitas</li>
              <li>Karir</li>
       
          </div>

          <div class="kontak col-3">
            <h5 class="">Kontak Kami</h5>
            <div class="my-2">
              <i class="bi bi-telephone-forward"></i>
              <span>
                081234567890
              </span>
            </div>

            <div class="my-2">
              <i class="bi bi-geo-alt-fill"></i>
              <span>
                Jl Panglima Sudirman No.143
              </span>
            </div>

            <div class="">
               <i class="bi bi-envelope-at"></i>
               <span>
                emailnyaiqbal@gmail.com
               </span>
            </div>

          </div>
          </div>
        </div>
        </div>
      </nav>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
