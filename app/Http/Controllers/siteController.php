<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class siteController extends Controller
{
    protected $redirectTo = '/add_your_pic';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    //
    public function mdracity() {
        return view('site.pages.mdracity');
    }
    
}
