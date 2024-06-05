<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
    <link rel="icon" href="/IMG/ico.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans&family=Salsa&display=swap"
      rel="stylesheet"
    />
    <title>Halogen</title>
</head>
<body id="main">
<nav class="navbar navbar-expand-sm fixed-top" id="navmain">
      <a class="navbar-brand" href="<?= site_url('') ?>">
        <img
          src="/IMG/white.png"
          alt="Logo"
          width="100"
          height="40"
          class="d-inline-block align-text-top"
      /></a>


        <div class="navbar-nav col-6" id="linkNavWhite">
          <a href="<?= site_url('') ?>" class="nav-item nav-link">Home</a>
          <a href="<?= site_url('/main') ?>" class="nav-item nav-link">News</a>
          <a href="<?= site_url('/review') ?>" class="nav-item nav-link">Review</a>
        </div>

        <div class="navbar-nav col-6 d-flex justify-content-center">
          <a href="<?= site_url('/logout') ?>">
            <button type="button" class="btn btn-dark rounded-0">SUBSCRIBE</button>
          </a>
          <a href="<?= site_url('/login') ?>">
            <i class="bi bi-person-lines-fill profilemain"></i>
          </a>
        </div>
      
      </div>
    </nav>


<div class="mainbanner ">
<img src="/IMG/6.jpg" alt="banner" class="bannerimg">


      <div class="position-relative deskrip">
        <div class="caption">
          <h5>Honda</h5>
          <h1>CRV Gen-2</h1>
          <button class="btn rounded-1 mt-2 " id="reviewbutton">Full Review</button>
        </div>
      </div>

     

      <div class="col-6 container position-relative hotbanner">
      <a style="text-decoration: none" href="#">
      <h6 id="headerhot">Hot News</h6>
      </a>
        <div class="row position-absolute" id="hotimg">
            <div class="col container p-0 mx-2">
              <img src="/IMG/1.jpg" alt="">
              <div class="container position-relative p-0 m-0">
                <p class="p-1 m-0 fw-bold" id="hotcap">lorem loem LOLO rem rem AAA lorem loremlore</p>
              </div>
            </div>
            
            <div class="col container p-0 mx-2">
              <img src="/IMG/2.jpg" alt="">
              <div class="container position-relative p-0 m-0">
                <p class="p-1 m-0 fw-bold"  id="hotcap">lorem loem LOLO rem rem AAA lorem loremlore</p>
              </div>
            </div>

            <div class="col container p-0 mx-2">
              <img src="/IMG/3.jpg" alt="">
              <div class="container position-relative p-0 m-0">
                <p class="p-1 m-0 fw-bold" id="hotcap">lorem loem LOLO rem rem AAA lorem loremlore</p>
              </div>
            </div>
        </div>
      </div>       
</div>
    
<section class="p-5 pr-0 row harian">
<?php if (!empty($berita) && is_array($berita)): ?>
        <?php
            $news0 = isset($berita[0]) ? $berita[0] : null;
            $news1 = isset($berita[2]) ? $berita[2] : null;
            $news2 = isset($berita[5]) ? $berita[5] : null;
            $news3 = isset($berita[4]) ? $berita[4] : null;
            $news4 = isset($berita[1]) ? $berita[1] : null;
        ?>

  <h2 class="text-uppercase fw-bold">
    Rekomendasi Berita <hr id="horizonrl2">
</h2>
  <?php if ($news0): ?>
  <div class="container col-7">
    <img class="imgrecomendmain"src="<?= base_url('IMG/' . $news0['foto']) ?>" class="fill" alt="">
    <a href="<?= site_url('detail/' . $news0['id']) ?>">
      <h4 class="linkRecom text-uppercase"><?= esc($news0['judul']) ?></h4>
    </a>
    <p><?= esc($news0['berita']) ?></p>
  </div>
  <?php endif; ?>

  <div class="container col-5 ">

    <div class="siderecomend container-fluid d-flex flex-column ">
    <?php if ($news1): ?>
      <div class="row ps-3">
        <img class=" mb-3 col-5" src="<?= base_url('IMG/' . $news1['foto']) ?>" alt="">
        <a class="col-7 linkRecom" href="<?= site_url('detail/' . $news1['id']) ?>" >
          <span class="fw-bold text-uppercase"><?= esc($news1['judul']) ?></span>
        </a>
      </div>
      <?php endif; ?>

      <?php if ($news2): ?>
      <div class="row ps-3">
        <img class="my-3 col-5" src="<?= base_url('IMG/' . $news2['foto']) ?>" alt="">
        <a class="my-3 col-7 linkRecom" href="<?= site_url('detail/' . $news2['id']) ?>">
          <span class="my-3 fw-bold text-uppercase"><?= esc($news2['judul']) ?></span>
        </a>
      </div>
      <?php endif; ?>

      <?php if ($news3): ?>
      <div class="row ps-3">
        <img class="my-3 col-5" src="<?= base_url('IMG/' . $news3['foto']) ?>" alt="">
        <a class="my-3 col-7 linkRecom" href="<?= site_url('detail/' . $news3['id']) ?>">
          <span class="my-3 fw-bold text-uppercase"><?= esc($news3['judul']) ?></span>
        </a>
      </div>
      <?php endif; ?>

      <?php if ($news4): ?>
      <div class="row ps-3">
        <img class="my-3 col-5" src="<?= base_url('IMG/' . $news4['foto']) ?>" alt="">
        <a class="my-3 col-7 linkRecom" href="<?= site_url('detail/' . $news4['id']) ?>">
          <span class="my-3 fw-bold text-uppercase"><?= esc($news4['judul']) ?></span>
        </a>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
 

</section>

<section class="container-fluid p-5 mx-auto features1">
<h2 class="text-uppercase fw-bold">
    features <hr id="horizonrl2">
</h2>
<?php if (!empty($feature) && is_array($feature)): ?>
  
    <div class="row features">
    <?php 
        // Limiting the array to 4 elements
        $features_key = array_slice($feature, 0, 4); 
        foreach ($features_key as $features_item): 
    ?>
        <div class="position-relative flex-item">
          <div id="tglfeature">18/10/2024</div>
          <img src="<?= base_url('/IMG/feature/' . $features_item['thumbnail']) ?>" alt="">
          <a class="linkFeature" href="">
            <div class="fw-bold text-uppercase"><?= esc($features_item['judul']) ?> </div>
          </a>
          
        </div>
        <?php endforeach; ?>   
    </div>
 
</section>
 <?php endif; ?>
<?php if (!empty($berita) && is_array($berita)): ?>
<section class="row container-fluid p-5 beritaBaru">

  <h2 class="text-uppercase fw-bold">terbaru</h2>
  <hr id="horizonrl2">

  <div class="col-10 m-0">
    <?php 
        // Limiting the array to 5 elements
        $latest_news = array_slice($berita, 0, 5); 
        foreach ($latest_news as $news_item): 
    ?>
      <div class="row container rounded-3 p-0 mb-3" id="containBaru">
        <img class="p-3 col-6" src="<?= base_url('/IMG/' . $news_item['foto']) ?>" alt="">
        <div class="d-flex flex-column col-6 p-3 text-light ">
          <a href="<?= site_url('detail/' . $news_item['id']) ?>">
            <h5 class="text-uppercase baruTittle"><?= esc($news_item['judul']) ?></h5>
          </a>
          <p><?= esc($news_item['berita']) ?></p>
          <div class="tglBaru position-relative bottom-0 end-0"><?= esc($news_item['date']) ?></div>
        </div>
      </div>
    <?php endforeach; ?> 

<div class="d-flex justify-content-center p-0 m-0">
<a href="<?= site_url('/baru') ?>">
<button type="button" class="btn btn-dark btn-lg " id="more">See More</button>
</a>
</div>

</section>
<?php endif; ?>



<div class="medsos container-fluid bg-dark justify-content-around d-flex ">
    <a href="instagram.com">
    <i class="bi bi-instagram"></i> 
    </a>
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
                  src="/IMG/cover.png"
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
    <script src="js/mainPage.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    


    
</body>
</html>