<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\View;
use App\Http\Controllers\Controller;
use App\users;
use App\products;
use App\admin;
use Illuminate\Support\Facades\session;

use Validator;

class adminController extends Controller
{
    public function adminLogin(Request $request){
    	if(session('administrator')){
    		return view('error')->with('error', array('error'=>'Failed', 'msg'=>'已经登录过了', 'tmp_url'=>'/this/is/the/admin/real'));
    	}
    	$validator = Validator::make($request->all(),[
    		'name' => 'required',
    		'pwd' => 'required',
    	]);

    	if($validator->fails()){
    		return view('error')->with('error', array('error' => '少了点什么', 'msg'=>'请确保所有必要表单都已经填完', 'tmp_url' => '/this/is/the/admin'));
    	}

    	$admin = admin::select('pwd')->where('user', $request->name)->first();

    	if(!$admin){
    		return view('error')->with('error', array('error' => '不太对', 'msg'=>'我们老大不叫这个', 'tmp_url' => '/this/is/the/admin'));    		
    	}

    	if($admin->pwd === md5($request->pwd)){
    		session(['administrator'=>1]);
    		return view('error')->with('error', array('error' => '登陆成功', 'msg'=>'没毛病，你是老大', 'tmp_url' => '/this/is/the/admin/real'));
    	}

    	return view('error')->with('error', array('error'=>'Failed', 'msg'=>'哪儿来滚哪去', 'tmp_url'=>'/this/is/the/admin'));

    }


    public function adminLogout(){
    	if(!session('administrator')){
    		return view('error')->with('error', array('error'=>'Failed', 'msg'=>'哪儿来滚哪去', 'tmp_url'=>'/'));
    	}

    	session()->forget('administrator');

    	return view('error')->with('error', array('error'=>'Success', 'msg'=>'走好', 'tmp_url'=>'/'));
    }


    public function adminPage(){
    	if(!session('administrator')){
    		return view('error')->with('error', array('error'=>'Failed', 'msg'=>'哪儿来滚哪去', 'tmp_url'=>'/'));
    	}
    	$data = '<ul class="navbar-nav mr">
		    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Administrator
		        </a>
		        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="/admin/logout">logout</a>
		        </div>
		      </li>
		    </ul>';

		return view('back')->with('data', $data);

    }

}
