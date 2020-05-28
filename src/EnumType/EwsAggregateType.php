<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AggregateType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This max/min evaluation is applied to the field specified within the group by instance for EACH item within that group. This determines which item from each group is to be selected as the representative for that group.
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAggregateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Minimum'
     * @return string 'Minimum'
     */
    const VALUE_MINIMUM = 'Minimum';
    /**
     * Constant for value 'Maximum'
     * @return string 'Maximum'
     */
    const VALUE_MAXIMUM = 'Maximum';
    /**
     * Return allowed values
     * @uses self::VALUE_MINIMUM
     * @uses self::VALUE_MAXIMUM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MINIMUM,
            self::VALUE_MAXIMUM,
        );
    }
}
