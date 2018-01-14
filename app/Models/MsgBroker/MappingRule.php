<?php
/**
 * Created by PhpStorm.
 * User: hoduo
 * Date: 1/14/2018
 * Time: 22:00
 */
namespace App\MsgBroker;
use App\MsgBroker\DefaultCopyOperator;


class MappingRule {
	public $srcAttrNames = [];
	public $dstAttrNames = [];
	public $op = null;
	public function __construct() {
		$this->op = new DefaultCopyOperator();
	}

	/**
	 * @param FlexibleObject $source
	 * @param FlexibleObject $target
	 */
	public function ExecuteRule(FlexibleObject $source, FlexibleObject $target) {
		return $this->op->Process($source, $target, $this->srcAttrNames, $this->dstAttrNames);
	}

}