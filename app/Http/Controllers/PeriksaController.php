<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Keluhan;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Session;


class PeriksaController extends Controller
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
     public function index()
      {
           return view('pasien.keluhan.create');
      }

      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        //$id_user = Session::get('id');
        $id_user = \Auth::user()->id;
        $keluhan = new Keluhan();
        $keluhan->deskripsi = $request->deskripsi;
        $keluhan->id_user = $id_user;
        $keluhan->save();

        return redirect()->route('Periksa.index');
      }

    }
