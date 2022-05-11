<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function input()
    {
        // Fe8+ZCuugmI6bIL1ee4V3A==
        // return Crypt::encryptString("test");
        // try {
        //     $decrypted = Crypt::decryptString("Fe8+ZCuugmI6bIL1ee4V3A==");
        //     return $decrypted;
        // } catch (DecryptException $e) {
        //     //
        //     return $e;
        // }

        return view('pages.input');
    }

    public function output()
    {
        return view('pages.output');
    }
}
