<?php

namespace App\Http\Controllers;
use App\Models;
use Auth;


class AuthController extends Controller{

	function showLogin(){
		return view('login');
	}

	function showRegistrasi(){
		return view('registrasi');
	}

	function showAdminLogin(){
		return view('admin.login');
	}

	function loginProsess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password'), 'retype password' => request('password')]))
		{
			return redirect('admin/beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal Silahkan Cek Kembali Email Dan Password Anda');
		}
		return view('admin/beranda');
	}

	function logout(){
		Auth::logout();
		return redirect('/admin/beranda');
		//return redirect('/admin/login');
	}

	function showAdminRegistrasi(){
		return view('admin.registrasi');
	}

	function registrasiProcess(){
		if(Auth::attempt(['username' => request('username'), 'email' => request('email'), 'password' => request('password'), 'retype password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Registrasi Berhasil');
		}else{
			return back()->with('danger', 'Registrasi Gagal Silahkan Cek Kembali Email Dan Password Anda');
		}

		return view('admin/registrasi');
	}
}