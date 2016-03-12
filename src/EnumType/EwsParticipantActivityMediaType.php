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
    const VALUE_APP_SHARING = 'AppSharing';
    /**
     * Constant for value 'AudioVideo'
     * @return string 'AudioVideo'
     */
    const VALUE_AUDIO_VIDEO = 'AudioVideo';
    /**
     * Constant for value 'Chat'
     * @return string 'Chat'
     */
    const VALUE_CHAT = 'Chat';
    /**
     * Constant for value 'DataConf'
     * @return string 'DataConf'
     */
    const VALUE_DATA_CONF = 'DataConf';
    /**
     * Constant for value 'Meeting'
     * @return string 'Meeting'
     */
    const VALUE_MEETING = 'Meeting';
    /**
     * Constant for value 'MeetingConf'
     * @return string 'MeetingConf'
     */
    const VALUE_MEETING_CONF = 'MeetingConf';
    /**
     * Constant for value 'PhoneConf'
     * @return string 'PhoneConf'
     */
    const VALUE_PHONE_CONF = 'PhoneConf';
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
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_APP_SHARING
     * @uses self::VALUE_AUDIO_VIDEO
     * @uses self::VALUE_CHAT
     * @uses self::VALUE_DATA_CONF
     * @uses self::VALUE_MEETING
     * @uses self::VALUE_MEETING_CONF
     * @uses self::VALUE_PHONE_CONF
     * @uses self::VALUE_FOCUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APP_SHARING,
            self::VALUE_AUDIO_VIDEO,
            self::VALUE_CHAT,
            self::VALUE_DATA_CONF,
            self::VALUE_MEETING,
            self::VALUE_MEETING_CONF,
            self::VALUE_PHONE_CONF,
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
