<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HuodongController extends Controller
{
    
    public function index()
    {
    	$list = \DB::table("sales")->get();
    	//var_dump($list);
    	//dd($list);

    	return view("/huodong",["list"=>$list]);
    }

    public function show($id)
    {
        return "查看活动Id".$id;
    }

    //3 添加表单
    public function create()
    {
        return "添加表单";
    }

    //4 执行添加
    public function store(REQUEST $request)
    {
        return "执行添加";
    }

    //5 修改表单
    public function edit($id)
    {
        return "修改表单".$id;
    }

    //6 执行修改 
    public function update(REQUEST $request,$id)
    {
        return "执行修改";
    }

    //7 执行删除 
    public function destroy($id)
    {
        return "执行删除".$id;
    }
}


