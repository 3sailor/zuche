<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Login1Controller extends Controller
{
    //
    public function dologin(REQUEST $request)
    {
    	$uname=$request->input('name');
    	$upwd=$request->input('pwd');

    	$ob=\DB::table('user')->where("userName",$uname)->first();

    	if($ob){
    		if($ob->pwd==$upwd){
    			session()->set('user',$ob);
    			return redirect("/");

    		}
    		return back()->with("msg","用户名密码错误");
    	}else{
    		return back()->with("msg","用户名密码错误");
   		}
    }
    public function logout()
    {
    	session()->forget('user');
    	return redirect("login1");
    }
}
