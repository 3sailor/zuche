<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
// use Session;

class LoginController extends Controller
{
    //登录表单
    public function login()
    {
    	return view("admin.login.login");
    }

    //执行登录
    public function dologin(Request $request)
    {
    	//验证码
    	$mycode = session()->get('code');
    	// dd($mycode);
    	// if($mycode!=$request->input('code')){
    	// 	return back()->with("msg","验证码错误");
	    // }
    	
    	//用户名
    		$userName = $request->input('userName');
    		// dd($userName);
    		$password = $request->input('password');
    		// dd($password);
    		$ob = \DB::table('user')->where("userName",$userName)->first();
    		// dd($ob);
    		if($ob){
    			//3 密码
    			if($ob->pwd==$password){
    				//31写入session
    				session()->set("adminuser",$ob);
    				//32跳转到后台首页
    				return redirect("admin/index");
    			}
    			return back()->with("msg","用户或密码错误");
    		}

    		return back()->with("msg","用户或密码错误");
    }
    //验证码
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        // Session::flash('admin/captcha', $phrase);
        session()->flash('code', $phrase);
        //生成图片
        // header("Cache-Control: no-cache, must-revalidate");
        // header('Content-Type: image/jpeg');
        // $builder->output();
        // exit;
        return response($builder->output())->header('Content-type','image/jpeg');
       
    }
    
    //执行退出
    public function logout()
    {
    	//忘记session
    	session()->forget("adminuser");
    	//重定向
    	return redirect("admin/login");
    }
}
