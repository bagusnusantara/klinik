<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class PasienController extends Controller
{
    public $successStatus = 200;

    public function getPasienByID($id) {
		$user = User::find($id);
		return response()->json(array('user' => $user), $this->successStatus);
    }
}
