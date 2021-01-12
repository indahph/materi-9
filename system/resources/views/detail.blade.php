<!DOCTYPE html>
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
          <li class=><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/produk') }}">Produk</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori</a></li>
          <li><a href="{{ url('/registrasi') }}">Register</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <div class="container pt-5">

    <div class="row">
      <div class="col-md-12 mt-5">
        <div class="card">
          <div class="card-header">
            Detail Data Produk
          </div>
          <div class="card-body">
            <h2>{{$produk->nama}}</h2>
            <hr>
            <p>
              Rp. {{number_format($produk->harga)}}  |
              Stok. {{$produk->stok}}  |
              Berat {{$produk->berat}} gr
            </p>
            <p>
              {!! nl2br($produk->deskripsi) !!}
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>  

  <!-- ======= Footer ======= -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Jual Beli Motor Online</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
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