<?php

namespace Ews\EnumType;

/**
 * This class stands for SharingInvitationPermissionLevel EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSharingInvitationPermissionLevel
{
    /**
     * Constant for value 'FreeBusy'
     * @return string 'FreeBusy'
     */
    const VALUE_FREE_BUSY = 'FreeBusy';
    /**
     * Constant for value 'LimitedDetails'
     * @return string 'LimitedDetails'
     */
    const VALUE_LIMITED_DETAILS = 'LimitedDetails';
    /**
     * Constant for value 'Read'
     * @return string 'Read'
     */
    const VALUE_READ = 'Read';
    /**
     * Constant for value 'ReadWrite'
     * @return string 'ReadWrite'
     */
    const VALUE_READ_WRITE = 'ReadWrite';
    /**
     * Constant for value 'CoOwner'
     * @return string 'CoOwner'
     */
    const VALUE_CO_OWNER = 'CoOwner';
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
     * @uses self::VALUE_FREE_BUSY
     * @uses self::VALUE_LIMITED_DETAILS
     * @uses self::VALUE_READ
     * @uses self::VALUE_READ_WRITE
     * @uses self::VALUE_CO_OWNER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FREE_BUSY,
            self::VALUE_LIMITED_DETAILS,
            self::VALUE_READ,
            self::VALUE_READ_WRITE,
            self::VALUE_CO_OWNER,
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
