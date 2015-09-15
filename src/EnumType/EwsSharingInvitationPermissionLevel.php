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
    const VALUE_FREEBUSY = 'FreeBusy';
    /**
     * Constant for value 'LimitedDetails'
     * @return string 'LimitedDetails'
     */
    const VALUE_LIMITEDDETAILS = 'LimitedDetails';
    /**
     * Constant for value 'Read'
     * @return string 'Read'
     */
    const VALUE_READ = 'Read';
    /**
     * Constant for value 'ReadWrite'
     * @return string 'ReadWrite'
     */
    const VALUE_READWRITE = 'ReadWrite';
    /**
     * Constant for value 'CoOwner'
     * @return string 'CoOwner'
     */
    const VALUE_COOWNER = 'CoOwner';
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
     * @uses self::VALUE_FREEBUSY
     * @uses self::VALUE_LIMITEDDETAILS
     * @uses self::VALUE_READ
     * @uses self::VALUE_READWRITE
     * @uses self::VALUE_COOWNER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FREEBUSY,
            self::VALUE_LIMITEDDETAILS,
            self::VALUE_READ,
            self::VALUE_READWRITE,
            self::VALUE_COOWNER,
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
