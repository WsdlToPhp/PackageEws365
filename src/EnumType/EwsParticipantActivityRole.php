<?php

namespace Ews\EnumType;

/**
 * This class stands for ParticipantActivityRole EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsParticipantActivityRole
{
    /**
     * Constant for value 'Organizer'
     * @return string 'Organizer'
     */
    const VALUE_ORGANIZER = 'Organizer';
    /**
     * Constant for value 'Attendee'
     * @return string 'Attendee'
     */
    const VALUE_ATTENDEE = 'Attendee';
    /**
     * Constant for value 'Presenter'
     * @return string 'Presenter'
     */
    const VALUE_PRESENTER = 'Presenter';
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
     * @uses self::VALUE_ORGANIZER
     * @uses self::VALUE_ATTENDEE
     * @uses self::VALUE_PRESENTER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORGANIZER,
            self::VALUE_ATTENDEE,
            self::VALUE_PRESENTER,
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
