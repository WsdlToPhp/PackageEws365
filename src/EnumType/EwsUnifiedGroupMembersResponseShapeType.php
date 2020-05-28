<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnifiedGroupMembersResponseShapeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupMembersResponseShapeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Members'
     * @return string 'Members'
     */
    const VALUE_MEMBERS = 'Members';
    /**
     * Constant for value 'Owners'
     * @return string 'Owners'
     */
    const VALUE_OWNERS = 'Owners';
    /**
     * Return allowed values
     * @uses self::VALUE_MEMBERS
     * @uses self::VALUE_OWNERS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MEMBERS,
            self::VALUE_OWNERS,
        );
    }
}
