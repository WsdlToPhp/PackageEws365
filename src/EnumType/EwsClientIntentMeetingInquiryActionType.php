<?php

namespace Ews\EnumType;

/**
 * This class stands for ClientIntentMeetingInquiryActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientIntentMeetingInquiryActionType
{
    /**
     * Constant for value 'SendCancellation'
     * @return string 'SendCancellation'
     */
    const VALUE_SENDCANCELLATION = 'SendCancellation';
    /**
     * Constant for value 'ReviveMeeting'
     * @return string 'ReviveMeeting'
     */
    const VALUE_REVIVEMEETING = 'ReviveMeeting';
    /**
     * Constant for value 'SendUpdateForMaster'
     * @return string 'SendUpdateForMaster'
     */
    const VALUE_SENDUPDATEFORMASTER = 'SendUpdateForMaster';
    /**
     * Constant for value 'MeetingAlreadyExists'
     * @return string 'MeetingAlreadyExists'
     */
    const VALUE_MEETINGALREADYEXISTS = 'MeetingAlreadyExists';
    /**
     * Constant for value 'ExistingOccurrence'
     * @return string 'ExistingOccurrence'
     */
    const VALUE_EXISTINGOCCURRENCE = 'ExistingOccurrence';
    /**
     * Constant for value 'HasDelegates'
     * @return string 'HasDelegates'
     */
    const VALUE_HASDELEGATES = 'HasDelegates';
    /**
     * Constant for value 'DeletedVersionNotFound'
     * @return string 'DeletedVersionNotFound'
     */
    const VALUE_DELETEDVERSIONNOTFOUND = 'DeletedVersionNotFound';
    /**
     * Constant for value 'PairedCancellationFound'
     * @return string 'PairedCancellationFound'
     */
    const VALUE_PAIREDCANCELLATIONFOUND = 'PairedCancellationFound';
    /**
     * Constant for value 'FailedToRevive'
     * @return string 'FailedToRevive'
     */
    const VALUE_FAILEDTOREVIVE = 'FailedToRevive';
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
     * @uses self::VALUE_SENDCANCELLATION
     * @uses self::VALUE_REVIVEMEETING
     * @uses self::VALUE_SENDUPDATEFORMASTER
     * @uses self::VALUE_MEETINGALREADYEXISTS
     * @uses self::VALUE_EXISTINGOCCURRENCE
     * @uses self::VALUE_HASDELEGATES
     * @uses self::VALUE_DELETEDVERSIONNOTFOUND
     * @uses self::VALUE_PAIREDCANCELLATIONFOUND
     * @uses self::VALUE_FAILEDTOREVIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SENDCANCELLATION,
            self::VALUE_REVIVEMEETING,
            self::VALUE_SENDUPDATEFORMASTER,
            self::VALUE_MEETINGALREADYEXISTS,
            self::VALUE_EXISTINGOCCURRENCE,
            self::VALUE_HASDELEGATES,
            self::VALUE_DELETEDVERSIONNOTFOUND,
            self::VALUE_PAIREDCANCELLATIONFOUND,
            self::VALUE_FAILEDTOREVIVE,
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
