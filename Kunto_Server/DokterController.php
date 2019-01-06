<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DokterController extends Controller
{
    public $successStatus = 200;

    public function getDokterByID($id) {
    	$user = User::find($id);
    	return response()->json($user, $this->successStatus);
    }
}
