<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;
use App\Charts\SampleCharts;
use Charts;
use DB;

class ChartContoller extends Controller
{
    //
    public function index()
    {
        /*   $users = order::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
               ->get();
           $chart = Charts::database($users, 'bar', 'highcharts')
               ->title("Monthly new Register Users")
               ->elementLabel("Total Users")
               ->dimensions(1000, 500)
               ->responsive(false)
               ->groupByMonth(date('Y'), true);
        $rr=5;
        $chart = Charts::database(order::all(),'bar', 'highcharts')
            ->title("My website User")
            ->labels(['1', '2', 'ES'])
            ->groupBy('foodname');*/

        $chart = Charts::database(order::all(),'line', 'highcharts')
            ->title("My website User")
            ->labels(['1', '2', '3'])
            ->groupBy('foodname')
           ;
        return view('users', compact('chart'));
    }
}
