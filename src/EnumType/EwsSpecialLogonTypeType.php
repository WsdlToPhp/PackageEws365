<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SpecialLogonTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Surfaces the various logon types that are supported for conversion
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSpecialLogonTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Admin'
     * @return string 'Admin'
     */
    const VALUE_ADMIN = 'Admin';
    /**
     * Constant for value 'SystemService'
     * @return string 'SystemService'
     */
    const VALUE_SYSTEM_SERVICE = 'SystemService';
    /**
     * Return allowed values
     * @uses self::VALUE_ADMIN
     * @uses self::VALUE_SYSTEM_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADMIN,
            self::VALUE_SYSTEM_SERVICE,
        );
    }
}
