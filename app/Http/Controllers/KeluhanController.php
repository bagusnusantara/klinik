<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\purchase_planning_hdr;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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
     public function index(Request $request)
      {
           // $start = "01"."-".date('m-Y');
           // $end = date('d-m-Y');
           // if (isset($_GET["start"]) || isset($_GET["end"]) ){
        		// 	if ((isset($_GET['start'])) && ($_GET['start'] != "")){
        		// 		$startDate = $_GET["start"];
        		// 	}
        		// 	if ((isset($_GET['end'])) && ($_GET['end'] != "")){
        		// 		$endDate = $_GET["end"];
        		// 	}
           //  }
           //  $startDateQuery = date("Y-m-d", strtotime($start));
           //  $endDateQuery = date("Y-m-d", strtotime($end));
           //  view()->share('start',$start);
           //  view()->share('end',$end);
           $start = $request->get('start');
           $end = $request->get('end');
           $so_detail_list = so_detail::orderBy('so_hdr_so_num', 'ASC')->get();
           $so_hdr = so_hdr::all();
           // $so = so_detail::all();
           $so = so_detail::whereBetween('request_date', [$start, $end])->get();
           $netto= so_detail::raw('receive_qty * price')->orderBy('so_hdr_so_num', 'ASC')->get();
           // $so_a = so_detail::where('id_company','AAA')->orWhere('id_company', 'CCC')->get();
           // $so_b = so_detail::where('id_company','BBB')->get();

           return view('dashboard',compact('so_detail_list','netto','so','so_hdr'));
      }
      public function edit($so_hdr_so_num)
      {
          $dtl = so_detail::find($so_hdr_so_num);
          return view('invoice_print');
      }
      public function show($so_hdr_so_num)
      {
          $dtl = so_detail::find($so_hdr_so_num);
          return view('invoice_print');
      }
    }
