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
    	$keluhan = Keluhan::all()->where('id_user', $id);
        $data = [];
        foreach ($keluhan as $item) {
            $data[] = [
                'id_user' => $item->id_user,
                'id_keluhan' => $item->id_keluhan,
                'deskripsi' => $item->deskripsi,
                'tanggal' => $item->tanggal,
            ];
        }
        return response()->json($data, $this->successStatus);
    }

    public function getDetailsKeluhanByID() {

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
        $rekamMedic = TransMedisFisik::where('users_id', $id);
        return response()->json($rekamMedic, $this->successStatus);
    }

    public function getDetailsRekamMedicByID() {

    }

    public function getDetailsTabelPoedjiRochjatiByID() {

    }

    public function getDataGrafikPoedjiRochjati() {

    }
}
