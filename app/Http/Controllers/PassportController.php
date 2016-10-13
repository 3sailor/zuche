<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PassportController extends Controller
{

    //注册
    public function store(REQUEST $request)
    {
    	
    	$a=($request->only('pwd','xpwd'));

    	if($a['pwd']==$a['xpwd']){
    		$data=$request->only("userName","pwd");    	
    		// dd($data['userName']);
            $uname=\DB::table("user")->select('userName')->get();
            foreach($uname as $v){
                // dd($v->userName);
                if($v->userName==$data['userName']){
                    return back()->with("msg","用户名重复");
                }
            }
    		$id=\DB::table("user")->insertGetId($data);
    		if($id>0){
            	// return "注册成功";
            	return view('/login');
        	}else{
           		return back()->with("msg","注册失败");
       		}
    	}else{
    		return back()->with("msg","注册失败");
    	}
    }
}
