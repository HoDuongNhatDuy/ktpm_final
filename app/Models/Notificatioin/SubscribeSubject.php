<?php

namespace App\Models\Notification;

use Illuminate\Database\Eloquent\Model;

class SubscribeSubject extends Model
{
	protected $table = 'subscribe_subjects';

	protected $fillable = [
		'id', 'username', 'keyword'
	];
}
