@extends('template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h2>{{$produk->nama}}</h2>
						<hr>
						   @include('admin.produk.show.detail')
						<p>
							{!! nl2br($produk->deskripsi) !!}
						</p>

						<p>
							<!-- <img src="{{url("public", $produk->foto)}}" alt=""> -->
							<img src="{{url("public/$produk->foto")}}" alt="" height="185px" width="285px">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection