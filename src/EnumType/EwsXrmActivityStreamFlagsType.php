<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for XrmActivityStreamFlagsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmActivityStreamFlagsType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'IsRendered'
     * @return string 'IsRendered'
     */
    const VALUE_IS_RENDERED = 'IsRendered';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_IS_RENDERED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_IS_RENDERED,
        );
    }
}
