<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContentActivityMediaType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContentActivityMediaType extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_APP_SHARING
     * @uses self::VALUE_AUDIO_VIDEO
     * @uses self::VALUE_CHAT
     * @uses self::VALUE_DATA_CONF
     * @uses self::VALUE_MEETING
     * @uses self::VALUE_MEETING_CONF
     * @uses self::VALUE_PHONE_CONF
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
        );
    }
}
