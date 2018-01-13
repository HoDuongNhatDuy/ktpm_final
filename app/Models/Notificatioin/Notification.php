<?php

namespace App\Models\Notification;

class Notification
{
	public static function notifyAll($message) {
		$subscribers = Subscriber::all();
		foreach ($subscribers as $subscriber) {
			$subjects = $subscriber->subjects();
			foreach ($subjects as $subject) {
				$keyWord = $subject->keyword;
				if (self::isMatch($message, $subjects)) {
					$subscriber->notify($keyWord, $message);
				}
			}
		}
	}

	private static function isMatch($message, $keyword) {
		return stripos($message, $keyword) !== FALSE;
	}
}
