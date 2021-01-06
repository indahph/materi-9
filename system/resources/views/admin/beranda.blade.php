@extends('template.base')
@section ('content')
 <div class="jumbotron">
  <h1 class="display-4">Selamat datang di Toko Jual Beli Laptop Online</h1>
  <p class="lead">Di Toko laptop online kami terdapat banyak laptop dengan harga terjangkau bagi siswa dan mahasiswa dan di toko online kami juga ada promo dan diskon loh, buruan jangan sampai kelewatan. Happy Shopping dan Terimaksih Telah Berkunjung.</p>
  <hr class="my-4">
  <p>Toko Online Kami Ini Sudah Pasti Dipercayai Di Indonesia Khususnya Diketapang Itu Sendiri.</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/produk')}}" role="button">Mulai Belanja</a>
</div>
 @endsection