<?php
/**
 * Created by PhpStorm.
 * User: hoduo
 * Date: 1/14/2018
 * Time: 23:18
 */

namespace App\MsgBroker;


class MapYear extends MappingOperator {

	public function Process( FlexibleObject $source, FlexibleObject $target, $strSourceAttributeNames, $strTargetAttributeNames ) {
		$startYear = $source->getAttribute($strSourceAttributeNames[0]);
		$expectedEndYear = $startYear + 4;
		$target->setAttribute($strTargetAttributeNames[0], $expectedEndYear);
	}
}