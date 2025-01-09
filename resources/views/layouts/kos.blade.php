<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> Kos Arshiya </title>

  <link rel="stylesheet" type="text/css" href="/kos/css/vendor.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  <!-- Link Bootstrap's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="/kos/style.css">

  <!-- Google Fonts ================================================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- script ================================================== -->
  <script src="/kos/js/modernizr.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <!-- CSS Flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">

  <!-- nav bar start  -->
  <header id="nav" class="site-header position-fixed text-white bg-dark">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="/kos/images/logo.png" alt="Logo"></a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
          <ion-icon name="menu-outline" style="font-size: 30px;"></ion-icon>
        </button>
        <div class="offcanvas offcanvas-end" id="offcanvasNavbar2" tabindex="-1">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('penyewa') ? 'active' : '' }}" href="/penyewa">Data Penyewa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('kamar') ? 'active' : '' }}" href="/kamar">Data Kamar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('history') ? 'active' : '' }}" href="/history">Data History</a>
              </li>
            </ul>
            <a class="btn btn-primary" href="{{ route('logout') }}">Log Out</a>
          </div>
        </div>
      </div>
    </nav>

  </header>

  <main class="content">

    </div>

    @yield('content')
  </main>
  </main>

  <!-- Footer start  -->
  <section id="footer">
    <div class="container footer-container">
      <footer class="footer text-white">
        <div class="container py-5">
          <div class="row">
            <!-- Logo dan Deskripsi -->
            <div class="col-md-4">
              <img src="/kos/images/logo.png" alt="Kos Arshiya Logo" class="footer-logo-img mb-3">
              <p>
                Kos Arshiya menyediakan tempat tinggal nyaman dan aman. Kami membantu Anda menemukan kos ideal sesuai
                kebutuhan Anda.
              </p>
              <div class="social-icons">
                <a href="#" class="text-white me-3"><i class="bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="bi-twitter"></i></a>
                <a href="#" class="text-white"><i class="bi-youtube"></i></a>
              </div>
            </div>
            <!-- Links -->
            <div class="col-md-2">
              <h5>Proyek</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Houses</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Rooms</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Flats</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Apartments</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <h5>Perusahaan</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Tentang Kami</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Cara Kerja</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Keamanan</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <h5>Bantuan</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Privasi</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Ketentuan</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQ</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <h5>Kontak</h5>
              <p class="mb-1">Email: support@arshiyakos.com</p>
              <p class="mb-1">Telp: +62 123 4567 890</p>
              <p>Alamat: Jl. Kos Nyaman, No. 23, Bandung</p>
            </div>
          </div>
          <div class="text-center mt-4 border-top pt-4">
            <p>© 2023 Kos Arshiya. All rights reserved.</p>
          </div>
        </div>
      </footer>

    </div>
  </section>




  <script src="/kos/js/jquery-1.11.0.min.js"></script>
  <script src="/kos/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
