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
    	$antrian = Keluhan::where('tanggal', $now)->get();
    	$data = [];
    	foreach ($antrian as $item) {
            $data[] = [
                'id' => $item->id,
                'id_keluhan' => $item->id_keluhan,
                'nama' => $item->user->name,
                'deskripsi' => $item->deskripsi,
                'tanggal' => $item->tanggal,
                'no_telp' => $item->user->no_telp,
            ];
        }
    	return response()->json($data, $this->successStatus);
    }
    
    public function getDetailAntrian($id) {
        $detail = Keluhan::find($id);
        $pasien = User::find($detail->id);
        return response()->json([
            'id' => $detail->id,
            'id_keluhan' => $detail->id_keluhan,
            'nama' => $pasien->name,
            'deskripsi' => $detail->deskripsi,
            'tanggal' => $detail->tanggal,
            'no_telp' => $pasien->no_telp,
        ], $this->successStatus);
    }
}
