@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Asus</h5>
			        <p class="card-text text-muted"> Laptop Asus disini kami menyediakan banyak model dengan berbagai macam spesifikasi tentunya juga terjangkau, Selain itu kamu juga menyediakan laptop asus gaming yaitu Asus ROG</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Acer </h5>
			        <p class="card-text text-muted">Selain Laptop asus kita juga menyediakan berbagai macam jenis laptop Acer harga murah kualitas bagus yang pastinya sangan cocok sekali untuk klian para pelajar maupun mahasiswa</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Dell</h5>
			        <p class="card-text text-muted">Selain 2 Produk tadi kita juga menyediakan Laptop Dell laptop dell ini juga tidak kalah bagusnya dibandingkan laptop yang lain</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">HP</h5>
			        <p class="card-text text-muted">Laptop jenis HP juga tersedia loh ditoko online kita buruan di cek.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

			</div>
    	</div>
    </div>
  </div>
</div>

@endsection