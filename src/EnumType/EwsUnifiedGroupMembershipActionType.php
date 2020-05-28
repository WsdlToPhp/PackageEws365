<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnifiedGroupMembershipActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupMembershipActionType extends AbstractStructEnumBase
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
     * Constant for value 'Promote'
     * @return string 'Promote'
     */
    const VALUE_PROMOTE = 'Promote';
    /**
     * Constant for value 'Demote'
     * @return string 'Demote'
     */
    const VALUE_DEMOTE = 'Demote';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_PROMOTE
     * @uses self::VALUE_DEMOTE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_REMOVE,
            self::VALUE_PROMOTE,
            self::VALUE_DEMOTE,
        );
    }
}
