<?php

namespace App\Http\Controllers;


use App\Models\Notification\Notification;
use App\Models\Notification\Subscriber;
use App\Models\User;
use App\MsgBroker\DefaultCopyOperator;
use App\MsgBroker\FlexibleObject;
use App\MsgBroker\MapAddress;
use App\MsgBroker\MappingRule;
use App\MsgBroker\MapYear;
use App\MsgBroker\ObjectTransformer;
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

	public function getStudentInfoForStudent($username) {
		$student = User::where('name', '=', $username)->first();
		return json_encode($student);
	}

	public function getStudentInfoForTeacher($username) {
		$student = User::where('name', '=', $username)->first();

		$srcStudent = new FlexibleObject();
		$srcStudent->initAttributes([
			'name' => $student->name,
			'email' => $student->email,
			'year_start' => $student->year_start,
			'province' => $student->province,
			'city' => $student->city,
		]);

		$dstStudent = new FlexibleObject();
		$dstStudent->initAttributes([
			'student_name' => '',
			'student_email' => '',
			'expected_year_end' => '',
			'address' => ''
		]);

		$nameRule = new MappingRule();
		$nameRule->srcAttrNames = ['name'];
		$nameRule->dstAttrNames = ['student_name'];

		$emailRule = new MappingRule();
		$emailRule->srcAttrNames = ['email'];
		$emailRule->dstAttrNames = ['student_email'];

		$yearRule = new MappingRule();
		$yearRule->srcAttrNames = ['year_start'];
		$yearRule->dstAttrNames = ['expected_year_end'];
		$yearRule->op = new MapYear();

		$addressRule = new MappingRule();
		$addressRule->srcAttrNames = ['province', 'city'];
		$addressRule->dstAttrNames = ['address'];
		$addressRule->op = new MapAddress();

		$transformer = new ObjectTransformer();
		$transformer->AddRule($nameRule);
		$transformer->AddRule($emailRule);
		$transformer->AddRule($yearRule);
		$transformer->AddRule($addressRule);
		$transformer->Apply($srcStudent, $dstStudent);

		$result = $dstStudent->parse();

		return json_encode($result);
	}
}