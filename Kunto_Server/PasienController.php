<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Keluhan;

class PasienController extends Controller
{
    public $successStatus = 200;

    public function getPasienByID($id) {
		$user = User::find($id);
		return response()->json($user, $this->successStatus);
    }

    public function getListKeluhanByID($id) {
    	$keluhan = Keluhan::all()->where('id_user', $id);
    	return response()->json($keluhan, $this->successStatus);
    }
}
