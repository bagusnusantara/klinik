<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected function authenticated($request, $user){
         if($user->roles=='dokter'){
           return redirect('ListPasien') ;
          }
        elseif($user->roles=='pasien'){
          return redirect('Dashboard') ;
          }
       // if($request->user()->getUserRole('dokter')){
       //   return redirect('ListPasien');
       //   //return response()->json($request->user()->getUserRole());
       // }
       // else if ($request->user()->getUserRole('pasien')) {
       //   return redirect('Dashboard');
       //   //return response()->json($request->user()->getUserRole());
       // }
     }

    //protected $redirectTo = '/Dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
