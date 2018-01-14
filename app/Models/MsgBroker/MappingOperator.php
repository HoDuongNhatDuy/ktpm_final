<?php
/**
 * Created by PhpStorm.
 * User: hoduo
 * Date: 1/14/2018
 * Time: 22:01
 */

namespace App\MsgBroker;


abstract class MappingOperator {
	public abstract function Process(FlexibleObject $source, FlexibleObject $target, $strSourceAttributeNames, $strTargetAttributeNames);
}