<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeasureController extends Controller
{
    public function rpt_temperatura(){
    	return view("mediciones.rpt_temperatura");
    }
}
