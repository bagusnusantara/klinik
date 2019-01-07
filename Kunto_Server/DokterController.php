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
         $data = [];
         foreach ($antrian as $item) {
             $data[] = [
                 'id_user' => $item->id_user,
                 'id_keluhan' => $item->id_keluhan,
                 'deskripsi' => $item->deskripsi,
                 'tanggal' => $item->tanggal,
             ];
         }
    	return response()->json($data, $this->successStatus);
    }
}
