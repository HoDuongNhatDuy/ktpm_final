<?php

namespace App\Models\Notification;

use App\Models\User;
use Redis;

class Subscriber extends User
{
	public function notify($keyword, $message) {
		$redis = Redis::connection();

		$channel = $this->name . "_$keyword";
		$redis->publish($channel, $message);

		// send email
		$user = $this;
		Mail::send('emails.email', compact('message'),function($message) use($message, $user){
			$message->to($user->email);
			$message->subject($message);
		});
	}

	public function subjects() {
		return $this->hasMany('App\Model\SubscribeSubject', 'username', 'name');
	}

	public function subscribe($keyWord) {
		SubscribeSubject::create([
			'username' => $this->name,
			'keyword'  => $keyWord
		]);
	}
}
