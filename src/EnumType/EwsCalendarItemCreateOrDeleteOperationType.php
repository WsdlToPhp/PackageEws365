<?php

namespace Ews\EnumType;

/**
 * This class stands for CalendarItemCreateOrDeleteOperationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsCalendarItemCreateOrDeleteOperationType
{
    /**
     * Constant for value 'SendToNone'
     * @return string 'SendToNone'
     */
    const VALUE_SENDTONONE = 'SendToNone';
    /**
     * Constant for value 'SendOnlyToAll'
     * @return string 'SendOnlyToAll'
     */
    const VALUE_SENDONLYTOALL = 'SendOnlyToAll';
    /**
     * Constant for value 'SendToAllAndSaveCopy'
     * @return string 'SendToAllAndSaveCopy'
     */
    const VALUE_SENDTOALLANDSAVECOPY = 'SendToAllAndSaveCopy';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_SENDTONONE
     * @uses self::VALUE_SENDONLYTOALL
     * @uses self::VALUE_SENDTOALLANDSAVECOPY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SENDTONONE,
            self::VALUE_SENDONLYTOALL,
            self::VALUE_SENDTOALLANDSAVECOPY,
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
