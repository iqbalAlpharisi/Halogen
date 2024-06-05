<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../CSS/login.css" />
    <link rel="icon" href="IMG/ico.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans&family=Salsa&display=swap"
      rel="stylesheet"
    />
    <title>Login</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm fixed-top">
      <a class="navbar-brand" href="<?= site_url('') ?>">
        <img
          src="/IMG/white.png"
          alt="Logo"
          width="100"
          height="40"
          class="d-inline-block align-text-top"
      /></a>

      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#expand"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="expand">
        <div class="navbar-nav">
          <a href="<?= site_url('') ?>" class="nav-item nav-link">Home</a>
          <a href="<?= site_url('/main') ?>" class="nav-item nav-link">News</a>
          <a href="<?= site_url('/review') ?>" class="nav-item nav-link">Review</a>

        </div>
          <a href="<?= site_url('/subscribe') ?>">
            <button type="button" class="btn btn-dark">SUBSCRIBE</button>
          </a>
          <a href="<?= site_url('/login') ?>">
            <i class="bi bi-person-lines-fill"></i>
          </a>
      </div>
    </nav>
  
    <!-- login message -->
    <?php if(session()->getFlashdata('message')):?>
        <div style="color: green;">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- register message -->
    <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

<!-- Register section -->
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form action="<?= site_url('proses_register_user'); ?>" method="post">
          <h1>Register</h1>
          <span>Gunakan Email Aktif Untuk Registrasi</span>
          <input type="text" placeholder="Nama" name="nama"/>
          <input type="text" placeholder="Username" name="username"/>
          <input type="email" placeholder="contoh@gmail.com" name="email" />
          <input type="password" placeholder="Password" name="password" />
          <button>Sign Up</button>
        </form>
      </div>

     

<!-- login sec -->
      <div class="form-container log-in">
        <form action="<?= site_url('login'); ?>" method="post">
          <h1>Log In</h1>

          <span>Gunakan Akun yang sudah terdaftar</span>
          <input name="username" placeholder="Exusername1" />
          <input type="password" name="password" placeholder="Password" />
          <a href="<?= site_url('lupa_password') ?>" >Lupa Password?</a>
          <button type="submit">Log In</button>
        </form>
      </div>

      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h2>Selamat Datang Kembali!</h2>
            <p>Masukkan detail pribadi Anda untuk membuka semua fitur</p>
            <button class="hidden" id="login">Log In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Halo Sobat!</h1>
            <p>
              Registrasi dengan detail pribadi Anda untuk membuka semua fitur
            </p>
            <button class="hidden" id="register">Register</button>
          </div>
        </div>
      </div>
    </div>
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
    <script src="/JS/script.js"></script>
  </body>
</html>
