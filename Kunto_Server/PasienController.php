<?php

namespace App\Http\Controllers\API;

use App\TransMedisFisik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Keluhan;
use Validator;

class PasienController extends Controller
{
    public $successStatus = 200;

    public function getPasienByID($id) {
		$user = User::find($id);
		return response()->json($user, $this->successStatus);
    }

    public function getListKeluhanByID($id) {
    	$keluhan = Keluhan::all()->where('id', $id);
        $data = [];
        foreach ($keluhan as $item) {
            $data[] = [
                'id_user' => $item->id,
                'id_keluhan' => $item->id_keluhan,
                'deskripsi' => $item->deskripsi,
                'tanggal' => $item->tanggal,
            ];
        }
        return response()->json($data, $this->successStatus);
    }

    public function getDetailsKeluhanByID($id) {
        $detail = Keluhan::find($id);
        $pasien = User::find($detail->id);
        return response()->json([
            'id_user' => $detail->id,
            'id_keluhan' => $detail->id_keluhan,
            'deskripsi' => $detail->deskripsi,
            'tanggal' => $detail->tanggal,
        ], $this->successStatus);
    }
    
    public function storeKeluhan(Request $request) {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        
        $input = $request->all();
        $success = Keluhan::create($input);
        $success['status'] = 'data berhasil dimasukkan';
        
        return response()->json(['success' => $success['status']], $this->successStatus);
    }

    public function getListRekamMedic($id) {
        $rekamMedic = TransMedisFisik::where('users_id', $id)->get();
        $data = [];
        foreach ($rekamMedic as $item) {
            $data[] = [
                'id' => $item->id,
                'trans_keluhan_id' => $item->trans_keluhan_id,
                'users_id' => $item->users_id,
                'tgl_pemeriksaan' => $item->tgl_pemeriksaan,
                'deskripsi' => $item->keluhan->deskripsi,
            ];
        }
        return response()->json($data, $this->successStatus);
    }

    public function getDetailsRekamMedicByID($id) {
        $detail = TransMedisFisik::find($id);
        return response()->json($detail, $this->successStatus);
    }

    public function getDetailsTabelPoedjiRochjatiByID() {

    }
}
