<?php 


namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\ClientProduk;

/**
 * 
 */
class ClientProdukController extends Controller
{
	
	function ShowHome()
	{
		$data['list_produk'] = Produk::all();
		return view('home', $data);
	}

	function ShowProduk(){
		$data['list_produk'] = Produk::all();
		// return view('produk', $data);
		// $list_bike  = ['Honda','Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'KTM',];
		// $list_bike = collect($list_bike);
		$list_produk = Produk::all();


		// Sorting
		// SOrt By Harga Terendah
		// dd($list_produk->sortBy('harga'));
		// SOrt By Harga Tertinggi
		// dd($list_produk->sortByDesc('harga')[1]);


		// map

		// $map = $list_produk-> map(function($item){
		// 	$result['nama'] = $item->nama;
		// 	$result['harga'] =$item->harga;
		// 	return $result;


		// });
		// foreach ($list_produk as $item){
		// 	echo "$item->nama<br>";
		// }

		// $list_produk->each(function($item){
		// 	echo "$item->nama<br>";
		// });

		// Filter 

		// $filtered = $list_produk->filter(function($item){
		// 	return $item->harga > 20000000;
		// });
		// dd($filtered);

		// $sum = $list_produk->min('stok');
		// dd($sum);

		// dd($map);

		$data['list'] = Produk::Paginate(7);
		return view ('produk', $data);

		//dd($list_produk);

	}

	function ShowDetail()
	{
		$data['list_produk'] = Produk::all();
		return view('detail', $data);
	}

		function ShowKategori()
	{
		$data['list_kategori'] = Kategori::all();
		return view('kategori', $data);
	}

	function clientfilter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('nama', 'like', "$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();

		//$data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereNull('stok')->get();
		//$data['list_produk'] = Produk::whereNotNull('stok')->get();

		//$data['list_produk'] = Produk::whereDate('created_at', '2020-11-17')->get();
		//$data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		//$data['list_produk'] = Produk::whereMonth('created_at', '11')->get();
		//$data['list_produk'] = Produk::whereTime('created_at', '17:50:07')->get();

		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereYear('created_at', '2020')->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [20])->whereYear('created_at', '2020')->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('produk', $data);

	}




}