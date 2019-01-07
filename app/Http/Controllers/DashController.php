<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Khill\Lavacharts\Lavacharts;


class DashController extends Controller
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
        $lava = new Lavacharts; // See note below for Laravel

              $skor = $lava->DataTable();

              $skor->addDateColumn('Tanggal Periksa')
             ->addNumberColumn('Skor')
             ->addRow(['2018-10-1',  67])
             ->addRow(['2018-11-2',  68])
             ->addRow(['2019-1-3',  68])
             ->addRow(['2019-2-4',  72])
             ->addRow(['2019-3-5',  61])
             ->addRow(['2019-4-6',  70])
             ->addRow(['2019-5-7',  74]);


            $lava->LineChart('Temps', $skor, [
                'title' => 'Skor Pemeriksaan Poedji Rochjati'
            ]);
           return view('dashboard',compact('lava'));
      }
    }
