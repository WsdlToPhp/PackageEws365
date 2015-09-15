<?php

namespace Ews\EnumType;

/**
 * This class stands for MeetingAttendeeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingAttendeeType
{
    /**
     * Constant for value 'Organizer'
     * @return string 'Organizer'
     */
    const VALUE_ORGANIZER = 'Organizer';
    /**
     * Constant for value 'Required'
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'Optional'
     * @return string 'Optional'
     */
    const VALUE_OPTIONAL = 'Optional';
    /**
     * Constant for value 'Room'
     * @return string 'Room'
     */
    const VALUE_ROOM = 'Room';
    /**
     * Constant for value 'Resource'
     * @return string 'Resource'
     */
    const VALUE_RESOURCE = 'Resource';
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
     * @uses self::VALUE_ORGANIZER
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_OPTIONAL
     * @uses self::VALUE_ROOM
     * @uses self::VALUE_RESOURCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORGANIZER,
            self::VALUE_REQUIRED,
            self::VALUE_OPTIONAL,
            self::VALUE_ROOM,
            self::VALUE_RESOURCE,
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
