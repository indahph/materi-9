!DOCTYPE html>
<html lang="en">

<head>
  @include('section.assets')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('admin/beranda') }}">Jual Beli Motor Online</a></h1>
      <nav class="nav-menu d-none d-lg-block ">
        <ul>
          <li class=><a href="{{url('/home') }}">Home</a></li>
          <li><a href="{{url('/produk') }}">Produk</a></li>
          <li><a href="{{url('/kategori') }}">Kategori</a></li>
          <li><a href="{{url('/registrasi') }}">Register</a></li>
          <li><a href="{{url('/login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Jual Beli Motor Online </h1>
      <h2>Salah satu tempat penjualan online terpecaya</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main"> 


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{url('public')}}/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Honda Vario 150 Black</h3>
            <p>
              Honda Vario 150 tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Honda hadir dalam 2 varian. Bicara soal spesifikasi mesin Honda Vario 150, ini ditenagai dua pilihan mesin Petrol berkapasitas 150 cc. Vario 150 tersedia dengan transmisi CVT tergantung variannya. Vario 150 adalah Scooter 2 seater dengan panjang 1919 mm, lebar 679 mm, wheelbase 1280 mm. serta ground clearance 132 mm.
            </p>
            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-money"></i>
                <h4>Harga</h4>
                <p>Rp.24.015.000</p>
              </div>
              <div class="col-md-6">
                <i class="bx bx-microchip" aria-hidden="true"></i> 
                <h4>Spesifikasi</h4>
                <p>Harga OTR(Jakarta Selatan) Rp 24,15 Juta*
Pilihan Angsuran  Rp 551.017 Harga Vario 150
Kapasitas 150 cc
Tenaga Maksimal 13 hp
Kategori  Scooter
Opsi start  Electric</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Footer ======= -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Jual Beli Laptop Online</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a>Indah Putri Hartanti</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
 @include('section.js')

</body>

</html>