<?php

namespace Ews\EnumType;

/**
 * This class stands for ResponseTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResponseTypeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Organizer'
     * @return string 'Organizer'
     */
    const VALUE_ORGANIZER = 'Organizer';
    /**
     * Constant for value 'Tentative'
     * @return string 'Tentative'
     */
    const VALUE_TENTATIVE = 'Tentative';
    /**
     * Constant for value 'Accept'
     * @return string 'Accept'
     */
    const VALUE_ACCEPT = 'Accept';
    /**
     * Constant for value 'Decline'
     * @return string 'Decline'
     */
    const VALUE_DECLINE = 'Decline';
    /**
     * Constant for value 'NoResponseReceived'
     * @return string 'NoResponseReceived'
     */
    const VALUE_NORESPONSERECEIVED = 'NoResponseReceived';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_ORGANIZER
     * @uses self::VALUE_TENTATIVE
     * @uses self::VALUE_ACCEPT
     * @uses self::VALUE_DECLINE
     * @uses self::VALUE_NORESPONSERECEIVED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_ORGANIZER,
            self::VALUE_TENTATIVE,
            self::VALUE_ACCEPT,
            self::VALUE_DECLINE,
            self::VALUE_NORESPONSERECEIVED,
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
