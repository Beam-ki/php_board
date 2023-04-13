<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
		session_start();
		if ($_SESSION == Null){
			echo '<script>alert("로그인 해주세요.")</script>';
			return view('login');
		$username = $_SESSION['username'];
		}else{
			return view('index');
		}
	}
	public function signup()
	{
		return view('signup');
	}
	public function check_signup()
	{
		return view('check_signup');
	}
	public function login()
	{	
		return view('login');
	}
	public function check_login()
	{
		return view('check_login');	
	}
	public function logout(){
		session_start();
		session_destroy();
		return view('logout');
	}
	public function write(){
		session_start();
		if ($_SESSION == Null){
			echo '<script>alert("회원만 작성이 가능합니다.")</script>';
			return view('login');
		}else{
			return view('write');
		}
	}
	public function check_write(){

		return view('check_writer');
	}
}