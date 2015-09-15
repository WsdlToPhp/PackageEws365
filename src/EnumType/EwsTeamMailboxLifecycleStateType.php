<?php

namespace Ews\EnumType;

/**
 * This class stands for TeamMailboxLifecycleStateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTeamMailboxLifecycleStateType
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'Unlinked'
     * @return string 'Unlinked'
     */
    const VALUE_UNLINKED = 'Unlinked';
    /**
     * Constant for value 'PendingDelete'
     * @return string 'PendingDelete'
     */
    const VALUE_PENDINGDELETE = 'PendingDelete';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_UNLINKED
     * @uses self::VALUE_PENDINGDELETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_CLOSED,
            self::VALUE_UNLINKED,
            self::VALUE_PENDINGDELETE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
