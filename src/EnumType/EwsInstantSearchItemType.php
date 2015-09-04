<?php

namespace Ews\EnumType;

/**
 * This class stands for InstantSearchItemType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsInstantSearchItemType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MailItem'
     * @return string 'MailItem'
     */
    const VALUE_MAILITEM = 'MailItem';
    /**
     * Constant for value 'MailConversation'
     * @return string 'MailConversation'
     */
    const VALUE_MAILCONVERSATION = 'MailConversation';
    /**
     * Constant for value 'CalendarItem'
     * @return string 'CalendarItem'
     */
    const VALUE_CALENDARITEM = 'CalendarItem';
    /**
     * Constant for value 'Persona'
     * @return string 'Persona'
     */
    const VALUE_PERSONA = 'Persona';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_MAILITEM
     * @uses self::VALUE_MAILCONVERSATION
     * @uses self::VALUE_CALENDARITEM
     * @uses self::VALUE_PERSONA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MAILITEM,
            self::VALUE_MAILCONVERSATION,
            self::VALUE_CALENDARITEM,
            self::VALUE_PERSONA,
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
