<?php
/**
 * Created by PhpStorm.
 * User: hoduo
 * Date: 1/14/2018
 * Time: 23:18
 */

namespace App\MsgBroker;


class MapAddress extends MappingOperator {

	public function Process( FlexibleObject $source, FlexibleObject $target, $strSourceAttributeNames, $strTargetAttributeNames ) {
		$province = $source->getAttribute($strSourceAttributeNames[0]);
		$city = $source->getAttribute($strSourceAttributeNames[1]);

		$address = "$province, $city";
		$target->setAttribute($strTargetAttributeNames[0], $address);
	}
}