<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Keluhan;
use Carbon\Carbon;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\TransPudji;
use Session;


class TransPudjiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(){
        return redirect()->back();
      }
      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        //$id_user = Session::get('id');
        $trans_pudji = TransPudji::create($request->all());
        // $trans_pudji->save();

        return redirect()->back();
      }

    }
