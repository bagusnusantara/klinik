<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Keluhan;
use Carbon\Carbon;
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
           $keluhan_list = Keluhan::all()->where('id_user',\Auth::user()->id);
           return view('pasien.keluhan.create',compact('keluhan_list'));
      }

      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        //$id_user = Session::get('id');
        $id_user = \Auth::user()->id;
        $tanggal = Carbon::now()->toDateTimeString();
        $keluhan = new Keluhan();
        $keluhan->deskripsi = $request->deskripsi;
        $keluhan->id_user = $id_user;
        $keluhan->tanggal = $tanggal;
        $keluhan->save();

        return redirect()->route('Periksa.index');
      }

    }
