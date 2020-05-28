<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DistinguishedPropertySetType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the well known property set ids for extended properties.
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedPropertySetType extends AbstractStructEnumBase
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
    const VALUE_PUBLIC_STRINGS = 'PublicStrings';
    /**
     * Constant for value 'Address'
     * @return string 'Address'
     */
    const VALUE_ADDRESS = 'Address';
    /**
     * Constant for value 'InternetHeaders'
     * @return string 'InternetHeaders'
     */
    const VALUE_INTERNET_HEADERS = 'InternetHeaders';
    /**
     * Constant for value 'CalendarAssistant'
     * @return string 'CalendarAssistant'
     */
    const VALUE_CALENDAR_ASSISTANT = 'CalendarAssistant';
    /**
     * Constant for value 'UnifiedMessaging'
     * @return string 'UnifiedMessaging'
     */
    const VALUE_UNIFIED_MESSAGING = 'UnifiedMessaging';
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
     * Return allowed values
     * @uses self::VALUE_MEETING
     * @uses self::VALUE_APPOINTMENT
     * @uses self::VALUE_COMMON
     * @uses self::VALUE_PUBLIC_STRINGS
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_INTERNET_HEADERS
     * @uses self::VALUE_CALENDAR_ASSISTANT
     * @uses self::VALUE_UNIFIED_MESSAGING
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
            self::VALUE_PUBLIC_STRINGS,
            self::VALUE_ADDRESS,
            self::VALUE_INTERNET_HEADERS,
            self::VALUE_CALENDAR_ASSISTANT,
            self::VALUE_UNIFIED_MESSAGING,
            self::VALUE_TASK,
            self::VALUE_SHARING,
        );
    }
}
