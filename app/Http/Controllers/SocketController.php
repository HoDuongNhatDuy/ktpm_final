<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LRedis;

class SocketController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}
	public function index()
	{
		return view('socket');
	}
	public function writeMessage()
	{
		return view('write_message');
	}
	public function sendMessage(){
		$redis = LRedis::connection();
		$redis->publish('message', Request::input('message'));
		return redirect('write-message');
	}
}
