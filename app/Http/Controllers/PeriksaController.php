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
           $keluhan_list = Keluhan::all()->where('id',\Auth::user()->id);
           return view('pasien.keluhan.create',compact('keluhan_list'));
      }

      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        //$id_user = Session::get('id');
        $id = \Auth::user()->id;
        $tanggal = Carbon::now()->toDateTimeString();
        $keluhan = new Keluhan();
        $keluhan->deskripsi = $request->deskripsi;
        $keluhan->id = $id;
        $keluhan->tanggal = $tanggal;
        $keluhan->save();

        return redirect()->route('Periksa.index');
      }
      public function show($id_keluhan)
      {
        $list_pasien = Keluhan::find($id_keluhan);
        $tabel_pr = TransPudji::where('trans_keluhan_id', $list_pasien->id_keluhan )->get();
         // dd($tabel_pr);
        //return response()->json($tabel_pr, 200);
        return view('pasien.keluhan.show',compact('list_pasien','tabel_pr'));
      }

    }
