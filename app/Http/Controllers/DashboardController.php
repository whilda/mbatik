<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function overview()
    {
        return view('overview');
    }
 
    public function transaction()
    {
    	return view('transaction');
    }
}
