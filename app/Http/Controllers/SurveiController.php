<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\Hasil;
use App\Saran;
use DB;

class SurveiController extends Controller
{
	public function store(Request $request)
	{
		$customer = Customer::create([
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'email' => $request->email,
			'no_telp' => $request->no_telp,
			'usia' => $request->usia,
			'jenis_kelamin' => $request->jenis_kelamin,
			'pendidikan' => $request->pendidikan,
			'jenis_pekerjaan' => $request->jenis_pekerjaan,
			'merk_dibeli' => $request->merk_dibeli,
		]);
		// var_dump($customer);
		$hasil = Hasil::create([
			'id_user' => $customer->id_datauser,
			'puas_p1' => $request->rating_input_1,
			'puas_p2' => $request->rating_input_3,
			'puas_p3' => $request->rating_input_5,
			'puas_p4' => $request->rating_input_7,
			'puas_p5' => $request->rating_input_9,
			'puas_p6' => $request->rating_input_11,
			'puas_p7' => $request->rating_input_13,
			'puas_p8' => $request->rating_input_15,
			'puas_p9' => $request->rating_input_17,
			'puas_p10' => $request->rating_input_19,
			'puas_p11' => $request->rating_input_21,
			'puas_p12' => $request->rating_input_23,
			'puas_p13' => $request->rating_input_25,
			'puas_p14' => $request->rating_input_27,
			'puas_p15' => $request->rating_input_29,
			'puas_p16' => $request->rating_input_31,
			'puas_p17' => $request->rating_input_33,
			'pent_p1' => $request->rating_input_2,
			'pent_p2' => $request->rating_input_4,
			'pent_p3' => $request->rating_input_6,
			'pent_p4' => $request->rating_input_8,
			'pent_p5' => $request->rating_input_10,
			'pent_p6' => $request->rating_input_12,
			'pent_p7' => $request->rating_input_14,
			'pent_p8' => $request->rating_input_16,
			'pent_p9' => $request->rating_input_18,
			'pent_p10' => $request->rating_input_20,
			'pent_p11' => $request->rating_input_22,
			'pent_p12' => $request->rating_input_24,
			'pent_p13' => $request->rating_input_26,
			'pent_p14' => $request->rating_input_28,
			'pent_p15' => $request->rating_input_30,
			'pent_p16' => $request->rating_input_32,
			'pent_p17' => $request->rating_input_34,
		]);

		$saran = Saran::create([
			'id_datauser' => $customer->id_datauser,
			'saran_masukan' => $request->saran_masukan,
			'tanggal' => now(),

		]);

		return redirect()->route('survei.thankyou');
	}

	public function thankyou()
	{
		return view('thankyou1');
	}
}
