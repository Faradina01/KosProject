@extends('layouts.kos')

@section('content')
<!-- Billboard -->
<section id="billboard">
  <div class="container">
    <div class="row flex-lg-row-reverse align-items-center">
      <div class="col-lg-6">
        <img src="/kos/images/kos.png" class="d-block mx-lg-auto img-fluid" alt="Kos Arshiya" width="700" height="500"
          loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="text-capitalize lh-1 my-3">Kos Arshiya</h1>
        <p class="lead">Selamat datang di Kos Arshiya, Kami hadir untuk memudahkan Anda menemukan tempat tinggal yang
          nyaman, aman, dan sesuai kebutuhan.</p>
      </div>
    </div>
  </div>
</section>

<!-- Card Section -->
<section id="stats" class="mt-5">
  <div class="container">
    <div class="row">
      <!-- Card 1: Jumlah Total Kamar -->
      <div class="col-md-6">
        <div class="card card-custom mb-3">
          <img src="/kos/images/total-kamar.jpg" class="card-img-top" alt="Jumlah Kamar">
          <div class="card-header total-kamar">Jumlah Kamar</div>
          <div class="card-body">
            <h5 class="card-title">{{ $totalKamar }}</h5>
            <p class="card-text">Jumlah kamar yang tersedia di Kos Arshiya.</p>
          </div>
        </div>
      </div>


      <!-- Card 2: Jumlah Kamar Kosong -->
      <div class="col-md-6">
        <div class="card card-custom mb-3">
          <img src="/kos/images/kamar-kosong.jpg" class="card-img-top" alt="Jumlah Kamar Kosong">
          <div class="card-header kamar-kosong">Jumlah Kamar Kosong</div>
          <div class="card-body">
            <h5 class="card-title">{{ $kamarKosong }}</h5>
            <p class="card-text">Jumlah kamar kosong yang siap ditempati.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
<style>
  section#stats .card-custom {
    background-color: #16423C !important;
  }

  .card-custom {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    transition: transform 0.2s, box-shadow 0.2s;
    background-color: #ffff !important;
    /* Warna putih */
  }

  .card-custom:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card-custom .card-img-top {
    height: 150px;
    object-fit: cover;
    width: 100%;
  }

  .card-custom .card-header {
    font-size: 1.25rem;
    font-weight: bold;
    background-color: #6A9C89;
    /* Hijau terang untuk header */
    color: #ffff;
    /* Teks hitam */
    text-align: center;
  }

  .card-custom .card-body {
    text-align: center;
    color: #ffff;
    /* Teks hitam */
  }

  .card-custom .card-title {
    font-size: 2rem;
    font-weight: bold;
    margin: 10px 0;
    color: #ffff;
    /* Teks hitam */
  }

  .card-custom .card-text {
    font-size: 1rem;
    color: #ffff;
    /* Teks abu-abu */
  }
</style>