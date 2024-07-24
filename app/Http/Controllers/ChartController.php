<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function pieChart()
    {
        $result =DB::select(DB(""));
        return view('charts.pie');
    }
}
