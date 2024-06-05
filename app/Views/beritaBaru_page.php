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

<nav class="navbar navbar-expand-sm sticky-top p-0">
      <a class="navbar-brand" href="<?= site_url('') ?>">
        <img
          src="/img/cover.png"
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
      </div>
    </nav>



    <section class="row container-fluid p-5 beritaBaru">
        <h2 class="text-uppercase fw-bold">Terbaru</h2>
        <hr id="horizonrl2">

        <div class="col-10 m-0">
            <?php if (!empty($berita) && is_array($berita)): ?>
                <?php foreach ($berita as $news_item): ?>
                    <div class="row container rounded-3 p-0 mb-3" id="containBaru">
                        <img class="p-3 col-6" src="<?= base_url('/IMG/' . $news_item['foto']) ?>" alt="">
                        <div class="d-flex flex-column col-6 p-3 text-light">
                            <a href="<?= site_url('detail/' . $news_item['id']) ?>">
                                <h5 class="text-uppercase baruTittle"><?= esc($news_item['judul']) ?></h5>
                            </a>
                            <p><?= esc($news_item['berita']) ?></p>
                            <div class="tglBaru position-relative bottom-0 end-0"><?= esc($news_item['date']) ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Pagination Links -->
                <div class="pagination">
                    <?= $pager->links('default', 'pagination') ?>
                </div>
            <?php else: ?>
                <p>Habis</p>
            <?php endif; ?>
        </div>
    </section>

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