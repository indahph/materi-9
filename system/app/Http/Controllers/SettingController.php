<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Auth;

class SettingController extends Controller{

	function index(){
		$data['user'] = Auth::user();
		return view('setting.index', $data);
	}

	function store(){
		$data = request()->all();
		if(request('current')){
			$user = Auth::user();
			dd($user);
			$check = Hash::check(request('current'), $user->password);
			dd($check);
			if(request('current')){
				if(request('new') != request('confirm')){
				return back()->with('danger', 'Password Baru Tidak Cocok');
				}
			}else{

			}
		}else{
			return back()->with('danger', 'password kosong');
		}
		
	}

}