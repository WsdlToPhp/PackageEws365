<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SenderRestrictionActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSenderRestrictionActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Remove'
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
    /**
     * Constant for value 'Replace'
     * @return string 'Replace'
     */
    const VALUE_REPLACE = 'Replace';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_REPLACE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_REMOVE,
            self::VALUE_REPLACE,
        );
    }
}
