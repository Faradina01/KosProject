<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Rentiz - Real Estate Free Website Template</title>

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
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">

  <!-- nav bar start  -->
  <header id="nav" class="site-header position-fixed text-white bg-dark">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">

      <div class="container ">

        <a class="navbar-brand" href="/kos/./index.html"><img src="/kos/images/logo.png" alt="image"></a>


        <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation"><ion-icon
            name="menu-outline" style="font-size: 30px;"></ion-icon></button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
          aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav align-items-center justify-content-end align-items-center flex-grow-1 ">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }} me-md-4" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('penyewa') ? 'active' : '' }} me-md-4" href="/penyewa">Data Penyewa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kamar') ? 'active' : '' }} me-md-4" href="/kamar">Data Kamar</a>
                </li>
            </ul>



<!-- Button trigger modal -->
<li class="nav-item">
    <a class="btn-medium btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Log Out</a>
</li>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Log Out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black">
                Apakah Anda yakin ingin keluar?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</div>




      </div>
    </nav>
    <style>
.flash-message {
    padding: 15px;
    margin: 80px 0 20px; /* Adjusted top margin */
    border-radius: 5px;
    font-size: 16px;
    position: relative;
    z-index: 1000; /* Ensure it appears above other elements */
}


        .flash-message.success {
          background-color: #d4edda;
          color: #155724;
          border: 1px solid #c3e6cb;
        }

        .flash-message.error {

          background-color: #f8d7da;
          color: #721c24;
          border: 1px solid #f5c6cb;
        }

        .flash-message.info {
          background-color: #cce5ff;
          color: #004085;
          border: 1px solid #b8daff;
        }

        .flash-message.warning {
          background-color: #fff3cd;
          color: #856404;
          border: 1px solid #ffeeba;
        }

        .flash-message .close {
          position: absolute;
          top: 10px;
          right: 15px;
          cursor: pointer;
          font-weight: bold;
        }
      </style>
  </header>

  <main class="content">


    <div class="flash-messages">
        @if(session('success'))
            <div class="flash-message success">
                {{ session('success') }}
                <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif

        @if(session('error'))
            <div class="flash-message error">
                {{ session('error') }}
                <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif

        @if(session('info'))
            <div class="flash-message info">
                {{ session('info') }}
                <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif

        @if(session('warning'))
            <div class="flash-message warning">
                {{ session('warning') }}
                <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif
    </div>

    @yield('content')
    <main class="content">
        @include('flash::message')
    </main>
  </main>

  <!-- Footer start  -->
  <section id="footer">
    <div class="container footer-container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5  ">

        <div class=" col-md-4">
          <h3><img src="/kos/images/logo.png" alt="image"></h3>
          <p>Neque, vestibulum sed varius magna et at. Eu, adipiscing morbi augue.</p>
          <i class="bi-facebook pe-4"></i>
          <i class="bi-instagram pe-4"></i>
          <i class="bi-twitter pe-4"></i>
          <i class="bi-youtube pe-4"></i>
        </div>

        <div class="col-md-2 ">
          <h5>Project</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Houses</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Rooms</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Flats</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Appartments</a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Company</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">How we work ?</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Capital </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Security </a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Movement</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Movement</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Support us</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Pricing</a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Help</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Privacy </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Condition</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Blog</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
          </ul>
        </div>
      </footer>
    </div>



    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 ">
        <div class="col-md-8 d-flex align-items-center">
          <p>© 2023 TemplatesJungle, Inc. All rights reserved.</p>

        </div>
        <div class="col-md-4 d-flex align-items-center">
          <p>HTML template by: <a href="https://templatesjungle.com/" class="link-primary"
              target="_blank">TemplatesJungle</a> <br> Distributed by: <a href="https://themewagon.com" class="link-primary"
              target="_blank">ThemeWagon</a></p>

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
