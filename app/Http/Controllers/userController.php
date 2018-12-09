<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\View;
use App\Http\Controllers\Controller;
use App\users;
use Illuminate\Support\Facades\session;

use Validator;

class userController extends Controller
{
	public function login(Request $request){
		$validator = Validator::make($request->all(),[
			'user_name' => 'required',
			'pwd' => 'required',
		]);
		$error = [];
		if ($validator->fails()){
			return view('error')->with('error', array('error' => '少了点什么', 'msg'=>'请确保所有必要表单都已经填完', 'tmp_url' => '/login'));
		}

		$user_name = $request->input(['user_name']);
		$pwd = $request->input(['pwd']);

		$user = users::where('nick_name', $user_name)->first();

		if (is_null($user)){
			return view('error')->with('error', array('error' => '好像有什么不对', 'msg'=>'请确保用户名输入正确，此用户名不存在', 'tmp_url' => '/login'));
		}

		if ($user->pwd === $pwd){
			session(['union_id' => $user->union_id]);
			$tmp_redirect_url = session('tmp_url');
			if(!empty($tmp_url)){
				return redirect($tmp_url);
			}
			return view('error')->with('error', array('error' => '登陆成功', 'msg'=>'登陆成功，请继续操作', 'tmp_url' => session('tmp_url')));
		}

		return view('error')->with('error', array('error' => '好像有什么不对', 'msg'=>'请确保用户名和密码输入正确', 'tmp_url' => '/login'));
	}



	public function signin(Request $request){
		$validator = Validator::make($request->all(),[
			'user_name' => 'required',
			'pwd' => 'required',
			'phone' => 'required',
			'email' => 'required',
			'confirm_pwd' => 'required'
		]);

		if($validator->fails()){
			return view('error')->with('error', array('error' => '少了点什么', 'msg'=>'请确保所有必要表单都已经填完', 'tmp_url' => '/register'));
		}

		if($request->pwd !== $request->confirm_pwd){
			return view('error')->with('error', array('error' => '您的手肯定出了什么问题', 'msg'=>'请确保两次输入密码相等', 'tmp_url' => '/register'));
		}

		$new_user = new users;
		$new_user->union_id = (string)strtotime(date('Y-m-d H:i:s',time())).rand(1000,9999);
		$new_user->nick_name = $request->input(['user_name']);
		$new_user->phone = $request->input(['phone']);
		if($request->addr){
			$new_user->addr = $request->addr;
		}
		$new_user->pwd = $request->input(['pwd']);
		$new_user->sex = 0;
		if ($request->sex){
			$new_user = $request->sex;
		}
		$new_user->head_img = '';
		if($request->headimg){
			$headimg = $request->headimg;
		}

		$new_user->email = $request->email;
		$new_user->save();

		return view('error')->with('error', array('error' => '注册成功', 'msg'=>'您已经注册成功了呢，去登陆吧', 'tmp_url' => '/login'));
	}


	public function getUserData(Request $request){
		$union_id = session('union_id');
		if(empty($union_id)){
			return response()->json(['error'=>50001, 'msg'=>'no login']);
		}

		$user = users::select('nick_name', 'phone', 'addr', 'sex', 'head_img', 'email')->where('union_id', $union_id)->first();

		$data = [];
		$data['user_name'] = $user->nick_name;
		$data['phone'] = $user->phone;
		$data['addr'] = $user->addr;
		$data['sex'] = $user->sex;
		$data['head_img'] = $user->head_img;
		$data['email'] = $user->email;

		return response()->json(['error'=>0,'data'=>$data]);

	}

	public function changeUserData(Request $request){
		if (empty($request)){
			return response()->json(['error'=>40101, 'msg'=>'lose data']);
		}

		$union_id = session('union_id');
		if(empty($union_id)){
			return response()->json(['error'=>50001, 'msg'=>'no login']);
		}

		$user = users::where('union_id', $union_id)->first();
		if (!empty($request->phone)){
			$user->phone = $request->phone;
		}

		if (!empty($request->sex)){
			$user->sex = $request->sex;
		}
		if (!empty($request->addr)){
			$user->addr = $request->addr;
		}
		if (!empty($request->email)){
			$user->email = $request->email;
		}
		if (!empty($request->head_img)){
			$user->head_img = $request->head_img;
		}

		$user->update();

		return response()->json(['error'=>0,'msg'=>'1']);
	}


	public function changePwd(Request $request){
		$union_id = session('union_id');
		$validator = Validator::make($request->all(),[
			'pwd'=>'required',
			'new_pwd'=>'required'
		]);

		$user = users::where('union_id', $union_id)->first();

		if($user->pwd === $request->pwd){
			$user->pwd = $request->new_pwd;
			$user->update();
			return response()->json(['error'=>0,'msg'=>'success']);
		}

		return response()->json(['error'=>50001,'msg'=>'wrong password']);
	}


	public function logout(Request $request){
		if(!session('union_id')){
			return view('error')->with('error', array('error' => '想啥呢？', 'msg'=>'没进来就想出去，你是薛定谔的猫吗', 'tmp_url' => '/'));
		}

		session()->forget('union_id');
		return view('error')->with('error', array('error' => '欢迎下次光临', 'msg'=>'走好，不送', 'tmp_url' => '/'));
	}

}
