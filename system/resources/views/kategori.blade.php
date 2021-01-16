<!DOCTYPE html>
<html lang="en">

<head>
   @include('section.assets')

</head>

<body>
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Jual Beli Motor Online</a></h1>
      <nav class="nav-menu d-none d-lg-block ">
        <ul>
          <li class=><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/produk') }}">Produk</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->
<div class="card my-3">
  <div class="container">
    <h4>Halaman Produk</h4>
  </div>
  <div class="card-body">
    <div class="container">
      <div class="col-12">
        <div class="row">

          <div class="card my-3">
  <div class="container">
    <h4>Halaman Produk</h4>
  </div>
  <div class="card-body">
    <div class="container">
      <div class="col-12">
        <div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
@foreach($list_kategori as $kategori)
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-primary">{{$kategori->nama}}</h5>
              <p class="card-text text-muted"> {{$kategori->nama}}</p>
              <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
            </div>
          </div>
        </div>
        @endforeach

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