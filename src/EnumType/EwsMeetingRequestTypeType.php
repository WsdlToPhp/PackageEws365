<?php

namespace Ews\EnumType;

/**
 * This class stands for MeetingRequestTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingRequestTypeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'FullUpdate'
     * @return string 'FullUpdate'
     */
    const VALUE_FULLUPDATE = 'FullUpdate';
    /**
     * Constant for value 'InformationalUpdate'
     * @return string 'InformationalUpdate'
     */
    const VALUE_INFORMATIONALUPDATE = 'InformationalUpdate';
    /**
     * Constant for value 'NewMeetingRequest'
     * @return string 'NewMeetingRequest'
     */
    const VALUE_NEWMEETINGREQUEST = 'NewMeetingRequest';
    /**
     * Constant for value 'Outdated'
     * @return string 'Outdated'
     */
    const VALUE_OUTDATED = 'Outdated';
    /**
     * Constant for value 'SilentUpdate'
     * @return string 'SilentUpdate'
     */
    const VALUE_SILENTUPDATE = 'SilentUpdate';
    /**
     * Constant for value 'PrincipalWantsCopy'
     * @return string 'PrincipalWantsCopy'
     */
    const VALUE_PRINCIPALWANTSCOPY = 'PrincipalWantsCopy';
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
     * @uses self::VALUE_FULLUPDATE
     * @uses self::VALUE_INFORMATIONALUPDATE
     * @uses self::VALUE_NEWMEETINGREQUEST
     * @uses self::VALUE_OUTDATED
     * @uses self::VALUE_SILENTUPDATE
     * @uses self::VALUE_PRINCIPALWANTSCOPY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FULLUPDATE,
            self::VALUE_INFORMATIONALUPDATE,
            self::VALUE_NEWMEETINGREQUEST,
            self::VALUE_OUTDATED,
            self::VALUE_SILENTUPDATE,
            self::VALUE_PRINCIPALWANTSCOPY,
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
