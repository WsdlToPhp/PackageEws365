<?php

namespace Ews\EnumType;

/**
 * This class stands for NotificationEventTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNotificationEventTypeType
{
    /**
     * Constant for value 'CopiedEvent'
     * @return string 'CopiedEvent'
     */
    const VALUE_COPIEDEVENT = 'CopiedEvent';
    /**
     * Constant for value 'CreatedEvent'
     * @return string 'CreatedEvent'
     */
    const VALUE_CREATEDEVENT = 'CreatedEvent';
    /**
     * Constant for value 'DeletedEvent'
     * @return string 'DeletedEvent'
     */
    const VALUE_DELETEDEVENT = 'DeletedEvent';
    /**
     * Constant for value 'ModifiedEvent'
     * @return string 'ModifiedEvent'
     */
    const VALUE_MODIFIEDEVENT = 'ModifiedEvent';
    /**
     * Constant for value 'MovedEvent'
     * @return string 'MovedEvent'
     */
    const VALUE_MOVEDEVENT = 'MovedEvent';
    /**
     * Constant for value 'NewMailEvent'
     * @return string 'NewMailEvent'
     */
    const VALUE_NEWMAILEVENT = 'NewMailEvent';
    /**
     * Constant for value 'FreeBusyChangedEvent'
     * @return string 'FreeBusyChangedEvent'
     */
    const VALUE_FREEBUSYCHANGEDEVENT = 'FreeBusyChangedEvent';
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
     * @uses self::VALUE_COPIEDEVENT
     * @uses self::VALUE_CREATEDEVENT
     * @uses self::VALUE_DELETEDEVENT
     * @uses self::VALUE_MODIFIEDEVENT
     * @uses self::VALUE_MOVEDEVENT
     * @uses self::VALUE_NEWMAILEVENT
     * @uses self::VALUE_FREEBUSYCHANGEDEVENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COPIEDEVENT,
            self::VALUE_CREATEDEVENT,
            self::VALUE_DELETEDEVENT,
            self::VALUE_MODIFIEDEVENT,
            self::VALUE_MOVEDEVENT,
            self::VALUE_NEWMAILEVENT,
            self::VALUE_FREEBUSYCHANGEDEVENT,
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
