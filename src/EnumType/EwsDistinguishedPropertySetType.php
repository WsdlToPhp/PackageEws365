<?php

namespace Ews\EnumType;

/**
 * This class stands for DistinguishedPropertySetType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the well known property set ids for extended properties.
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedPropertySetType
{
    /**
     * Constant for value 'Meeting'
     * @return string 'Meeting'
     */
    const VALUE_MEETING = 'Meeting';
    /**
     * Constant for value 'Appointment'
     * @return string 'Appointment'
     */
    const VALUE_APPOINTMENT = 'Appointment';
    /**
     * Constant for value 'Common'
     * @return string 'Common'
     */
    const VALUE_COMMON = 'Common';
    /**
     * Constant for value 'PublicStrings'
     * @return string 'PublicStrings'
     */
    const VALUE_PUBLICSTRINGS = 'PublicStrings';
    /**
     * Constant for value 'Address'
     * @return string 'Address'
     */
    const VALUE_ADDRESS = 'Address';
    /**
     * Constant for value 'InternetHeaders'
     * @return string 'InternetHeaders'
     */
    const VALUE_INTERNETHEADERS = 'InternetHeaders';
    /**
     * Constant for value 'CalendarAssistant'
     * @return string 'CalendarAssistant'
     */
    const VALUE_CALENDARASSISTANT = 'CalendarAssistant';
    /**
     * Constant for value 'UnifiedMessaging'
     * @return string 'UnifiedMessaging'
     */
    const VALUE_UNIFIEDMESSAGING = 'UnifiedMessaging';
    /**
     * Constant for value 'Task'
     * @return string 'Task'
     */
    const VALUE_TASK = 'Task';
    /**
     * Constant for value 'Sharing'
     * @return string 'Sharing'
     */
    const VALUE_SHARING = 'Sharing';
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
     * @uses self::VALUE_MEETING
     * @uses self::VALUE_APPOINTMENT
     * @uses self::VALUE_COMMON
     * @uses self::VALUE_PUBLICSTRINGS
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_INTERNETHEADERS
     * @uses self::VALUE_CALENDARASSISTANT
     * @uses self::VALUE_UNIFIEDMESSAGING
     * @uses self::VALUE_TASK
     * @uses self::VALUE_SHARING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MEETING,
            self::VALUE_APPOINTMENT,
            self::VALUE_COMMON,
            self::VALUE_PUBLICSTRINGS,
            self::VALUE_ADDRESS,
            self::VALUE_INTERNETHEADERS,
            self::VALUE_CALENDARASSISTANT,
            self::VALUE_UNIFIEDMESSAGING,
            self::VALUE_TASK,
            self::VALUE_SHARING,
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
