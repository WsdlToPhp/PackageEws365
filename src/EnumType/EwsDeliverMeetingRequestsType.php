<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DeliverMeetingRequestsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeliverMeetingRequestsType extends AbstractStructEnumBase
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
}
