<?php

namespace Ews\EnumType;

/**
 * This class stands for DeliverMeetingRequestsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeliverMeetingRequestsType
{
    /**
     * Constant for value 'DelegatesOnly'
     * @return string 'DelegatesOnly'
     */
    const VALUE_DELEGATES_ONLY = 'DelegatesOnly';
    /**
     * Constant for value 'DelegatesAndMe'
     * @return string 'DelegatesAndMe'
     */
    const VALUE_DELEGATES_AND_ME = 'DelegatesAndMe';
    /**
     * Constant for value 'DelegatesAndSendInformationToMe'
     * @return string 'DelegatesAndSendInformationToMe'
     */
    const VALUE_DELEGATES_AND_SEND_INFORMATION_TO_ME = 'DelegatesAndSendInformationToMe';
    /**
     * Constant for value 'NoForward'
     * @return string 'NoForward'
     */
    const VALUE_NO_FORWARD = 'NoForward';
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
     * @uses self::VALUE_DELEGATES_ONLY
     * @uses self::VALUE_DELEGATES_AND_ME
     * @uses self::VALUE_DELEGATES_AND_SEND_INFORMATION_TO_ME
     * @uses self::VALUE_NO_FORWARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELEGATES_ONLY,
            self::VALUE_DELEGATES_AND_ME,
            self::VALUE_DELEGATES_AND_SEND_INFORMATION_TO_ME,
            self::VALUE_NO_FORWARD,
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
