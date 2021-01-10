<p>
	{{$produk->harga}}  |
	Stok : {{$produk->stok}}  |
	Berat : {{$produk->berat}} Kg |
	Seller : {{$produk->seller->username}} |
	Tanggal Produksi :  {{$produk->created_at->diffForHumans()}}
</p>