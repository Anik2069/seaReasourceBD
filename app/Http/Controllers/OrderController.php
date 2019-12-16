<?php

namespace App\Http\Controllers;

use App\incoming;
use App\order;
use App\outgoing;
use Illuminate\Http\Request;
use Charts;
use DB;

class OrderController extends Controller
{
    //
    public function index(Request $request)
    {
        $order = new order();
        $order->customername = $request->input('customername');
        $order->phone = $request->input('phone');

        $order->email = $request->input('email');

        $order->district = $request->input('district');
        $order->address = $request->input('address');
        $order->foodname = $request->input('foodname');
        $order->price = $request->input('price');
        $order->quantity = $request->input('quantity');
        $order->total = (double)$request->input('price') * (double)$request->input('quantity');
        $order->card = $request->input('memberID');
        $val = $request->input('memberID');
        if ($val != null) {
            $order->paymentmethod = "Credit Card";
        } else {
            $order->paymentmethod = "Hand Cash";

        }
        $order->save();
        return redirect("/home");


    }

    public function vieworder()
    {
        $value = order::all()->toArray();
        return view('admin.orderview', compact('value'));
    }

    public function invoicepage($id)
    {
        $value = order::find($id);
        return view('admin.invoice', compact('value'));

    }

    public function misview()
    {
        $value = DB::select("SELECT foodname,sum(quantity) as quantity,sum(total) as total FROM orders GROUP BY foodname");
        $chart = Charts::database(order::all(), 'bar', 'highcharts')
            ->title("Customer Buying Charts")
            ->groupByMonth()
            ->groupBy('foodname');
        $i = 0;
        return view('admin.misreport', compact('value', 'chart', 'i'));


    }

    public function misviewyear()
    {
        $chart = Charts::database(order::all(), 'line', 'highcharts')
            ->title("Yearly Charts")
            ->groupBy('total')
            ->groupByYear(10);
        $i = 0;


        return view('admin.misreport1', compact('chart', 'i'));


    }

    public function misviewyear1(Request $request)
    {
        $year = $request->input('year');
        $chart = Charts::database(order::all(), 'line', 'highcharts')
            ->title("Yearly Charts")
            ->groupBy('total')
            ->groupByYear($year);
        $i = 0;


        return view('admin.misreport1', compact('chart', 'i'));

    }

    public function viewaccount()
    {

        /*        $value = order::all();
                $year= date(y-m-d);
                $year =explode($year);
                $dbyear=0;
                foreach ($value as $val){
                    $dbyear = explode($val->created_at);
                    if($dbyear){

                    }
                }*/
        $total = 0;
        $total1 = 0;
        $total2 = 0;
        $value1 = DB::select("Select sum(total) as sumtotal from orders");
        $value2 = DB::select("Select quantity,price from incomings");
        $value3 = DB::select("Select sum(price) as sumtotal from outgoings");

        foreach ($value1 as $val) {
            $total = (double)$val->sumtotal;

        }
        foreach ($value2 as $val) {
            $total1 = $total1 + (double)$val->quantity * (double)$val->price;

        }
        foreach ($value3 as $val) {
            $total2 = (double)$val->sumtotal;
        }
        $total3 = $total1 - $total2;
        $total4 = $total - $total1;
        $pie = Charts::create('pie', 'highcharts')
            ->title('Account chart')
            ->labels(['TotalSell', 'Cost', 'Profit'])
            ->values([$total, $total1, $total4])
            ->dimensions(1000, 500)
            ->responsive(false);

        return view('admin.account', compact('total', 'total1', 'total2', 'total3', 'total4', 'pie'));
    }

    public function viewaccount1(Request $request)
    {

        $value = order::all();
        $value1 = incoming::all();
        $value2=outgoing::all();
        $year = $request->input('year');
        $dbyear = 0;
        $total = 0;
        $total1 = 0;
        $total2 = 0;

        foreach ($value as $val) {
            $dbyear = explode('-',$val->created_at);

            if ($dbyear[0] == $year) {
                $total = $total + (double)$val->total;

            }
        }

        foreach ($value1 as $val) {
            $dbyear = explode('-',$val->created_at);
            if ($dbyear[0] == $year) {
                $total = $total + (double)$val->quantity*(double)$val->price;

            }
        }

        foreach ($value2 as $val) {
            $dbyear = explode('-',$val->created_at);
            if ($dbyear[0] == $year) {
                $total2 = $total + (double)$val->price;

            }
        }
        $total3 = $total1 - $total2;
        $total4 = $total - $total1;
        $pie = Charts::create('pie', 'highcharts')
            ->title('Account chart')
            ->labels(['TotalSell', 'Cost', 'Profit'])
            ->values([$total, $total1, $total4])
            ->dimensions(1000, 500)
            ->responsive(false);

        return view('admin.account', compact('total', 'total1', 'total2', 'total3', 'total4', 'pie','year'));

    }

}
