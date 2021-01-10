@extends('template.base')
@section ('content')
 <div class="jumbotron">
  <h1 class="display-4">Selamat datang di Toko Jual Beli motor Online</h1>
  <p class="lead">Di Toko motor online kami terdapat banyak motor dengan harga terjangkau dikantong siswa dan mahasiswa, dan di toko online kami juga ada promo dan diskon loh gaess, buruan jangan sampai kelewatan. Happy Shopping dan Terimaksih Telah Berkunjung.</p>
  <hr class="my-4">
  <p>Toko Online Kami Ini Sudah Pasti Dipercayai Di Indonesia Khususnya Diketapang Itu Sendiri.</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/produk')}}" role="button">Mulai Belanja</a>
</div>
 @endsection