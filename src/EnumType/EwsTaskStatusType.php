<?php

namespace Ews\EnumType;

/**
 * This class stands for TaskStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskStatusType
{
    /**
     * Constant for value 'NotStarted'
     * @return string 'NotStarted'
     */
    const VALUE_NOTSTARTED = 'NotStarted';
    /**
     * Constant for value 'InProgress'
     * @return string 'InProgress'
     */
    const VALUE_INPROGRESS = 'InProgress';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'WaitingOnOthers'
     * @return string 'WaitingOnOthers'
     */
    const VALUE_WAITINGONOTHERS = 'WaitingOnOthers';
    /**
     * Constant for value 'Deferred'
     * @return string 'Deferred'
     */
    const VALUE_DEFERRED = 'Deferred';
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
     * @uses self::VALUE_NOTSTARTED
     * @uses self::VALUE_INPROGRESS
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_WAITINGONOTHERS
     * @uses self::VALUE_DEFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTSTARTED,
            self::VALUE_INPROGRESS,
            self::VALUE_COMPLETED,
            self::VALUE_WAITINGONOTHERS,
            self::VALUE_DEFERRED,
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
