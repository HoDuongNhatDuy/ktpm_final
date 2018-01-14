<?php
/**
 * Created by PhpStorm.
 * User: hoduo
 * Date: 1/14/2018
 * Time: 22:59
 */

namespace App\MsgBroker;


class ObjectTransformer {
	protected $rules = [];

	public function AddRule( MappingRule $rule ) {
		$this->rules[] = $rule;
	}

	public function Apply( FlexibleObject $source, FlexibleObject $target ) {
		foreach ( $this->rules as $rule ) {
			$rule->ExecuteRule( $source, $target );
		}
	}
}