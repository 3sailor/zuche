<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyzucheController extends Controller
{	

	//短租自驾
	public function duanzu()
	{
		return view('myzuche.duanzu');
	}
	//顺丰车
	public function sfc()
	{
		return view('myzuche.sfc');
	}
	//优惠
	public function jifen()
	{
		return view('myzuche.jifen');
	}
	//优惠
	public function youhui()
	{
		return view('myzuche.youhui');
	}
	//余额
	public function yue()
	{
		return view('myzuche.yue');
	}
	//等级
	public function dengji()
	{
		return view('myzuche.dengji');
	}
	//信息
	public function xinxi()
	{
		$id=session('user')->id;
		$m=\DB::table('userDetail')->where('id',$id)->first();
		
		return view('myzuche.xinxi',['vo'=>$m]);
	}

    //修改密码
    public function pwd(Request $request)
    {
    	$id=session('user')->id;

    	$pwd=$request->only('pwd','xpwd','ypwd');
    	
    	if(session('user')->pwd==$pwd['pwd']&&$pwd['xpwd']==$pwd['ypwd']){

    		$m=\DB::table('user')->where("id",$id)->update(array('pwd'=>$pwd['xpwd']));
    		    		
    		return back()->with("msg","修改成功");
    	}else{
    		return back()->with("msg","修改失败");
    	}
    	
    	// return view('myzuche.pwd');
    }
	
}
