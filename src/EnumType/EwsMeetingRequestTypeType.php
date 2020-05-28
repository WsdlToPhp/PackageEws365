<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MeetingRequestTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingRequestTypeType extends AbstractStructEnumBase
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
    const VALUE_FULL_UPDATE = 'FullUpdate';
    /**
     * Constant for value 'InformationalUpdate'
     * @return string 'InformationalUpdate'
     */
    const VALUE_INFORMATIONAL_UPDATE = 'InformationalUpdate';
    /**
     * Constant for value 'NewMeetingRequest'
     * @return string 'NewMeetingRequest'
     */
    const VALUE_NEW_MEETING_REQUEST = 'NewMeetingRequest';
    /**
     * Constant for value 'Outdated'
     * @return string 'Outdated'
     */
    const VALUE_OUTDATED = 'Outdated';
    /**
     * Constant for value 'SilentUpdate'
     * @return string 'SilentUpdate'
     */
    const VALUE_SILENT_UPDATE = 'SilentUpdate';
    /**
     * Constant for value 'PrincipalWantsCopy'
     * @return string 'PrincipalWantsCopy'
     */
    const VALUE_PRINCIPAL_WANTS_COPY = 'PrincipalWantsCopy';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_FULL_UPDATE
     * @uses self::VALUE_INFORMATIONAL_UPDATE
     * @uses self::VALUE_NEW_MEETING_REQUEST
     * @uses self::VALUE_OUTDATED
     * @uses self::VALUE_SILENT_UPDATE
     * @uses self::VALUE_PRINCIPAL_WANTS_COPY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FULL_UPDATE,
            self::VALUE_INFORMATIONAL_UPDATE,
            self::VALUE_NEW_MEETING_REQUEST,
            self::VALUE_OUTDATED,
            self::VALUE_SILENT_UPDATE,
            self::VALUE_PRINCIPAL_WANTS_COPY,
        );
    }
}
