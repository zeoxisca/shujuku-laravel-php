<?php

use Illuminate\Support\Facades\session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/io', function(Request $request){
	$data = '
      					<div class="btn-group" role="group" aria-label="Basic example">
						  <button type="button" class="btn btn-secondary">Left</button>
						  <button type="button" class="btn btn-secondary">Middle</button>
						  <button type="button" class="btn btn-secondary">Right</button>
						</div>';
    return view('test')->with('data', $data);
});

Route::get('/',function(Request $request){
	if(session('union_id')){
		return view('index')->with('data','<ul class="navbar-nav mr">
		    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          this is the user1
		        </a>
		        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">mine</a>
		          <a class="dropdown-item" href="#">orders</a>
		          <a class="dropdown-item" href="#">carts</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="/logout">logout</a>
		        </div>
		      </li>
		    </ul>');
	}
	else
		return view('index')->with('data','<ul class="navbar-nav mr">
		    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          not logined
		        </a>
		        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="/login">login</a>
		        </div>
		      </li>
		    </ul>');
});

Route::get('/login', function(Request $request){
	// session(['tmp_url'=>url()->previous()]);
	session(['tmp_url'=>'/']);
	if(session('union_id')){
		return redirect('/');
	}
    return view('login');
});

Route::post('/login-data', 'userController@login');

// Route::get('/error', function(){
// 	return view('error');
// });

Route::get('/register', function(Request $request){
	// session(['tmp_url'=>url()->previous()]);
	session(['tmp_url'=>'/']);
	if(session('union_id')){
		return redirect('/');
	}
    return view('register');
});

Route::post('/reg-data', 'userController@signin');

Route::get('logout', 'userController@logout');


Route::view('this/is/the/admin', 'admin');

Route::post('admin-data', 'adminController@adminLogin');

Route::get('this/is/the/admin/real', 'adminController@adminPage');

Route::get('admin/logout', 'adminController@adminLogout');