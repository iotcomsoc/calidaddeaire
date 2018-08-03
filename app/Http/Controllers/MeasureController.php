<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeasureController extends Controller
{
    public function rpt_temperatura(){
    	return view("mediciones.rpt_temperatura");
    }

    public function rpt_temperatura_live(){
    	return view("mediciones.rpt_temperatura_live");
    }

    public function rpt_temperatura_serve(){
    	header("Content-type:text/json");
		$x = time()*1000;
		$y = rand(0,100);
		$ret = array($x,$y);
		echo json_encode($ret);
    }
}
