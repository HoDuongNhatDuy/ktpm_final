<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;

class SocketController extends Controller
{
    public function sendMessage() {
		$redis = Redis::connection();
		$redis->publish('message', 'This is message content');

		return 'published';
    }
}
