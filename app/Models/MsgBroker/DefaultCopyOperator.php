<?php
/**
 * Created by PhpStorm.
 * User: hoduo
 * Date: 1/14/2018
 * Time: 22:08
 */

namespace App\MsgBroker;


class DefaultCopyOperator extends MappingOperator{

	public function Process( FlexibleObject $source, FlexibleObject $target, $strSourceAttributeNames, $strTargetAttributeNames ) {
		$target->setAttribute( $strSourceAttributeNames[0], $source->getAttribute( $strSourceAttributeNames[0] ) );
	}
}