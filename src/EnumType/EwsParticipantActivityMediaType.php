<?php

namespace Ews\EnumType;

/**
 * This class stands for ParticipantActivityMediaType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsParticipantActivityMediaType
{
    /**
     * Constant for value 'AppSharing'
     * @return string 'AppSharing'
     */
    const VALUE_APPSHARING = 'AppSharing';
    /**
     * Constant for value 'AudioVideo'
     * @return string 'AudioVideo'
     */
    const VALUE_AUDIOVIDEO = 'AudioVideo';
    /**
     * Constant for value 'Chat'
     * @return string 'Chat'
     */
    const VALUE_CHAT = 'Chat';
    /**
     * Constant for value 'DataConf'
     * @return string 'DataConf'
     */
    const VALUE_DATACONF = 'DataConf';
    /**
     * Constant for value 'Meeting'
     * @return string 'Meeting'
     */
    const VALUE_MEETING = 'Meeting';
    /**
     * Constant for value 'MeetingConf'
     * @return string 'MeetingConf'
     */
    const VALUE_MEETINGCONF = 'MeetingConf';
    /**
     * Constant for value 'PhoneConf'
     * @return string 'PhoneConf'
     */
    const VALUE_PHONECONF = 'PhoneConf';
    /**
     * Constant for value 'Focus'
     * @return string 'Focus'
     */
    const VALUE_FOCUS = 'Focus';
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
     * @uses self::VALUE_APPSHARING
     * @uses self::VALUE_AUDIOVIDEO
     * @uses self::VALUE_CHAT
     * @uses self::VALUE_DATACONF
     * @uses self::VALUE_MEETING
     * @uses self::VALUE_MEETINGCONF
     * @uses self::VALUE_PHONECONF
     * @uses self::VALUE_FOCUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPSHARING,
            self::VALUE_AUDIOVIDEO,
            self::VALUE_CHAT,
            self::VALUE_DATACONF,
            self::VALUE_MEETING,
            self::VALUE_MEETINGCONF,
            self::VALUE_PHONECONF,
            self::VALUE_FOCUS,
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
