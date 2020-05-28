<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TaskStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotStarted'
     * @return string 'NotStarted'
     */
    const VALUE_NOT_STARTED = 'NotStarted';
    /**
     * Constant for value 'InProgress'
     * @return string 'InProgress'
     */
    const VALUE_IN_PROGRESS = 'InProgress';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'WaitingOnOthers'
     * @return string 'WaitingOnOthers'
     */
    const VALUE_WAITING_ON_OTHERS = 'WaitingOnOthers';
    /**
     * Constant for value 'Deferred'
     * @return string 'Deferred'
     */
    const VALUE_DEFERRED = 'Deferred';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_STARTED
     * @uses self::VALUE_IN_PROGRESS
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_WAITING_ON_OTHERS
     * @uses self::VALUE_DEFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_STARTED,
            self::VALUE_IN_PROGRESS,
            self::VALUE_COMPLETED,
            self::VALUE_WAITING_ON_OTHERS,
            self::VALUE_DEFERRED,
        );
    }
}
