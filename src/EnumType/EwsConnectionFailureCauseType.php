<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ConnectionFailureCauseType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConnectionFailureCauseType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'UserBusy'
     * @return string 'UserBusy'
     */
    const VALUE_USER_BUSY = 'UserBusy';
    /**
     * Constant for value 'NoAnswer'
     * @return string 'NoAnswer'
     */
    const VALUE_NO_ANSWER = 'NoAnswer';
    /**
     * Constant for value 'Unavailable'
     * @return string 'Unavailable'
     */
    const VALUE_UNAVAILABLE = 'Unavailable';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_USER_BUSY
     * @uses self::VALUE_NO_ANSWER
     * @uses self::VALUE_UNAVAILABLE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_USER_BUSY,
            self::VALUE_NO_ANSWER,
            self::VALUE_UNAVAILABLE,
            self::VALUE_OTHER,
        );
    }
}
