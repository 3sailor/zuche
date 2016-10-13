<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChangzuController extends Controller
{
	public function index ()
	{
		//获取数据库数据
	    $list = \DB::table("advantage")->get();
	    $car = \DB::table("recommend")->get();
	    //返回前台视图
	    return view('changzu',["list"=>$list,"car"=>$car]);
	}
    
}
