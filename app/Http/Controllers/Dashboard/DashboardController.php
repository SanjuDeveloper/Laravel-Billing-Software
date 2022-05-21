<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        $today =  date('Y-m-d');
        $mothDate =  date("Y-m-t", strtotime($today));
        $totalShale = Sale::all();
        foreach($totalShale as $data){
            if($data['timestamp'] == $today){
                $todayShale[] = $data['NetPayble'];
            }elseif( ($data['timestamp'] <= $mothDate) && ($data['timestamp'] != $today) ){
                $monthlyShale[] = $data['NetPayble'];
            }
            $annualShale[] = $data['NetPayble'];
        }

        $shaleArray = array(
            'today' => array_sum($todayShale),
            'monthly' => array_sum($monthlyShale),
            'annual' => array_sum($annualShale),
        );
        //print_r($shaleArray); die();
        //$totalShale = Sale::where('status', 1)->sum('NetPayble');
       return view('main', compact('shaleArray'));
    }
}
