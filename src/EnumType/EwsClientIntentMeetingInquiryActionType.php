<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClientIntentMeetingInquiryActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientIntentMeetingInquiryActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SendCancellation'
     * @return string 'SendCancellation'
     */
    const VALUE_SEND_CANCELLATION = 'SendCancellation';
    /**
     * Constant for value 'ReviveMeeting'
     * @return string 'ReviveMeeting'
     */
    const VALUE_REVIVE_MEETING = 'ReviveMeeting';
    /**
     * Constant for value 'SendUpdateForMaster'
     * @return string 'SendUpdateForMaster'
     */
    const VALUE_SEND_UPDATE_FOR_MASTER = 'SendUpdateForMaster';
    /**
     * Constant for value 'MeetingAlreadyExists'
     * @return string 'MeetingAlreadyExists'
     */
    const VALUE_MEETING_ALREADY_EXISTS = 'MeetingAlreadyExists';
    /**
     * Constant for value 'ExistingOccurrence'
     * @return string 'ExistingOccurrence'
     */
    const VALUE_EXISTING_OCCURRENCE = 'ExistingOccurrence';
    /**
     * Constant for value 'HasDelegates'
     * @return string 'HasDelegates'
     */
    const VALUE_HAS_DELEGATES = 'HasDelegates';
    /**
     * Constant for value 'DeletedVersionNotFound'
     * @return string 'DeletedVersionNotFound'
     */
    const VALUE_DELETED_VERSION_NOT_FOUND = 'DeletedVersionNotFound';
    /**
     * Constant for value 'PairedCancellationFound'
     * @return string 'PairedCancellationFound'
     */
    const VALUE_PAIRED_CANCELLATION_FOUND = 'PairedCancellationFound';
    /**
     * Constant for value 'FailedToRevive'
     * @return string 'FailedToRevive'
     */
    const VALUE_FAILED_TO_REVIVE = 'FailedToRevive';
    /**
     * Return allowed values
     * @uses self::VALUE_SEND_CANCELLATION
     * @uses self::VALUE_REVIVE_MEETING
     * @uses self::VALUE_SEND_UPDATE_FOR_MASTER
     * @uses self::VALUE_MEETING_ALREADY_EXISTS
     * @uses self::VALUE_EXISTING_OCCURRENCE
     * @uses self::VALUE_HAS_DELEGATES
     * @uses self::VALUE_DELETED_VERSION_NOT_FOUND
     * @uses self::VALUE_PAIRED_CANCELLATION_FOUND
     * @uses self::VALUE_FAILED_TO_REVIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SEND_CANCELLATION,
            self::VALUE_REVIVE_MEETING,
            self::VALUE_SEND_UPDATE_FOR_MASTER,
            self::VALUE_MEETING_ALREADY_EXISTS,
            self::VALUE_EXISTING_OCCURRENCE,
            self::VALUE_HAS_DELEGATES,
            self::VALUE_DELETED_VERSION_NOT_FOUND,
            self::VALUE_PAIRED_CANCELLATION_FOUND,
            self::VALUE_FAILED_TO_REVIVE,
        );
    }
}
