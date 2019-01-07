<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Keluhan;

class DokterController extends Controller
{
    public $successStatus = 200;

    public function getDokterByID($id) {
    	$user = User::find($id);
    	return response()->json($user, $this->successStatus);
    }

    public function getAntrianPasien() {
    	$now = \Carbon\Carbon::today();
    	$now = $now->toDateString();
    	$antrian = Keluhan::all()->where('tanggal', $now);
    	// $data = [];
    	// foreach ($antrian as $item) {
    	// 	$data[] = [
    	// 		'id_user' => $antrian->id_user,
    	// 		'id_keluhan' => $antrian->id_keluhan,
    	// 		'deskripsi' => $antrian->deskripsi,
    	// 		'tanggal' => $antrian->tanggal,
    	// 	];
    	// }
    	return response()->json($antrian->id_user, $this->successStatus);
    }
}
