<?php

namespace Ews\EnumType;

/**
 * This class stands for CalendarItemUpdateOperationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarItemUpdateOperationType
{
    /**
     * Constant for value 'SendToNone'
     * @return string 'SendToNone'
     */
    const VALUE_SEND_TO_NONE = 'SendToNone';
    /**
     * Constant for value 'SendOnlyToAll'
     * @return string 'SendOnlyToAll'
     */
    const VALUE_SEND_ONLY_TO_ALL = 'SendOnlyToAll';
    /**
     * Constant for value 'SendOnlyToChanged'
     * @return string 'SendOnlyToChanged'
     */
    const VALUE_SEND_ONLY_TO_CHANGED = 'SendOnlyToChanged';
    /**
     * Constant for value 'SendToAllAndSaveCopy'
     * @return string 'SendToAllAndSaveCopy'
     */
    const VALUE_SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';
    /**
     * Constant for value 'SendToChangedAndSaveCopy'
     * @return string 'SendToChangedAndSaveCopy'
     */
    const VALUE_SEND_TO_CHANGED_AND_SAVE_COPY = 'SendToChangedAndSaveCopy';
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
     * @uses self::VALUE_SEND_TO_NONE
     * @uses self::VALUE_SEND_ONLY_TO_ALL
     * @uses self::VALUE_SEND_ONLY_TO_CHANGED
     * @uses self::VALUE_SEND_TO_ALL_AND_SAVE_COPY
     * @uses self::VALUE_SEND_TO_CHANGED_AND_SAVE_COPY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SEND_TO_NONE,
            self::VALUE_SEND_ONLY_TO_ALL,
            self::VALUE_SEND_ONLY_TO_CHANGED,
            self::VALUE_SEND_TO_ALL_AND_SAVE_COPY,
            self::VALUE_SEND_TO_CHANGED_AND_SAVE_COPY,
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
