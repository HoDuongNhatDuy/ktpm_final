<?php

namespace App\Http\Controllers;


use App\Models\Notification\Notification;
use App\Models\Notification\Subscriber;
use Illuminate\Http\Request;

class HomController extends Controller {
	public function notifyMessage(Request $request) {
		$message = $request->get('message');
		Notification::notifyAll($message);
	}

	public function subscribe(Request $request) {
		$username = $request->get('username');
		$keyword  = $request->get('keyword');

		$subscriber = Subscriber::where('name', '=', $username)->firt();
		$subscriber->subscribe($keyword);
	}


}