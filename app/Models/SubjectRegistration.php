<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectRegistration extends Model
{
    protected $table = "subject_registrations";

    protected $fillable = [
    	'id', 'username', 'subject_key'
    ];
}
