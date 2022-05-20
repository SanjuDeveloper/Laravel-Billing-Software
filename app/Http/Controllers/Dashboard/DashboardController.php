<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        return view('main');
       /* $allShale = Sale::all();
        //dd($allShale);
        return view('main', compact($allShale));*/
    }
}
