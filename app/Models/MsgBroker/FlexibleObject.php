<?php
/**
 * Created by PhpStorm.
 * User: hoduo
 * Date: 1/14/2018
 * Time: 21:57
 */

namespace App\MsgBroker;


class FlexibleObject {
	protected $attributes = [];

	public function initAttributes($attributes) {
		$this->$attributes = $attributes;
	}

	public function setAttribute($key, $value) {
		$this->attributes[$key] = $value;
	}

	public function getAttribute($key) {
		return $this->attributes[$key];
	}

	public function parse() {
		return $this->attributes;
	}
}