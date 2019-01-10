<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keluhan;
use App\TransPudji;
use App\TransMedisFisik;
Use App\User;
use Carbon\Carbon;


class ListPasienController extends Controller
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

            $list_pasien = Keluhan::whereDate('tanggal', '=', Carbon::today())->get();
           return view('dokter.listpasien.index',compact('list_pasien'));
      }
      public function create()
      {
      }
      public function edit($id_keluhan)
      {
        $list_pasien = Keluhan::find($id_keluhan);
        $tabel_pr = TransPudji::where('trans_keluhan_id', $list_pasien->id_keluhan )->get();
         // dd($tabel_pr);
        //return response()->json($tabel_pr, 200);
        return view('dokter.pemeriksaan_fisik.create',compact('list_pasien','tabel_pr'));
      }
      public function store(Request $request)
      {
        $this->validate($request,[
        ]);
        $periksa = TransMedisFisik::create($request->all());
        $periksa->save();
        return redirect()->back();
      }
    }
