<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ImportanceChoicesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImportanceChoicesType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Low'
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'High'
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Return allowed values
     * @uses self::VALUE_LOW
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_HIGH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LOW,
            self::VALUE_NORMAL,
            self::VALUE_HIGH,
        );
    }
}
