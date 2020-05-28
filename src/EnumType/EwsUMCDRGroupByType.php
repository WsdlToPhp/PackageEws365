<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UMCDRGroupByType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUMCDRGroupByType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Day'
     * @return string 'Day'
     */
    const VALUE_DAY = 'Day';
    /**
     * Constant for value 'Month'
     * @return string 'Month'
     */
    const VALUE_MONTH = 'Month';
    /**
     * Constant for value 'Total'
     * @return string 'Total'
     */
    const VALUE_TOTAL = 'Total';
    /**
     * Return allowed values
     * @uses self::VALUE_DAY
     * @uses self::VALUE_MONTH
     * @uses self::VALUE_TOTAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAY,
            self::VALUE_MONTH,
            self::VALUE_TOTAL,
        );
    }
}
