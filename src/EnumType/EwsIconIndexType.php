<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IconIndexType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIconIndexType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'PostItem'
     * @return string 'PostItem'
     */
    const VALUE_POST_ITEM = 'PostItem';
    /**
     * Constant for value 'MailRead'
     * @return string 'MailRead'
     */
    const VALUE_MAIL_READ = 'MailRead';
    /**
     * Constant for value 'MailUnread'
     * @return string 'MailUnread'
     */
    const VALUE_MAIL_UNREAD = 'MailUnread';
    /**
     * Constant for value 'MailReplied'
     * @return string 'MailReplied'
     */
    const VALUE_MAIL_REPLIED = 'MailReplied';
    /**
     * Constant for value 'MailForwarded'
     * @return string 'MailForwarded'
     */
    const VALUE_MAIL_FORWARDED = 'MailForwarded';
    /**
     * Constant for value 'MailEncrypted'
     * @return string 'MailEncrypted'
     */
    const VALUE_MAIL_ENCRYPTED = 'MailEncrypted';
    /**
     * Constant for value 'MailSmimeSigned'
     * @return string 'MailSmimeSigned'
     */
    const VALUE_MAIL_SMIME_SIGNED = 'MailSmimeSigned';
    /**
     * Constant for value 'MailEncryptedReplied'
     * @return string 'MailEncryptedReplied'
     */
    const VALUE_MAIL_ENCRYPTED_REPLIED = 'MailEncryptedReplied';
    /**
     * Constant for value 'MailSmimeSignedReplied'
     * @return string 'MailSmimeSignedReplied'
     */
    const VALUE_MAIL_SMIME_SIGNED_REPLIED = 'MailSmimeSignedReplied';
    /**
     * Constant for value 'MailEncryptedForwarded'
     * @return string 'MailEncryptedForwarded'
     */
    const VALUE_MAIL_ENCRYPTED_FORWARDED = 'MailEncryptedForwarded';
    /**
     * Constant for value 'MailSmimeSignedForwarded'
     * @return string 'MailSmimeSignedForwarded'
     */
    const VALUE_MAIL_SMIME_SIGNED_FORWARDED = 'MailSmimeSignedForwarded';
    /**
     * Constant for value 'MailEncryptedRead'
     * @return string 'MailEncryptedRead'
     */
    const VALUE_MAIL_ENCRYPTED_READ = 'MailEncryptedRead';
    /**
     * Constant for value 'MailSmimeSignedRead'
     * @return string 'MailSmimeSignedRead'
     */
    const VALUE_MAIL_SMIME_SIGNED_READ = 'MailSmimeSignedRead';
    /**
     * Constant for value 'MailIrm'
     * @return string 'MailIrm'
     */
    const VALUE_MAIL_IRM = 'MailIrm';
    /**
     * Constant for value 'MailIrmForwarded'
     * @return string 'MailIrmForwarded'
     */
    const VALUE_MAIL_IRM_FORWARDED = 'MailIrmForwarded';
    /**
     * Constant for value 'MailIrmReplied'
     * @return string 'MailIrmReplied'
     */
    const VALUE_MAIL_IRM_REPLIED = 'MailIrmReplied';
    /**
     * Constant for value 'SmsSubmitted'
     * @return string 'SmsSubmitted'
     */
    const VALUE_SMS_SUBMITTED = 'SmsSubmitted';
    /**
     * Constant for value 'SmsRoutedToDeliveryPoint'
     * @return string 'SmsRoutedToDeliveryPoint'
     */
    const VALUE_SMS_ROUTED_TO_DELIVERY_POINT = 'SmsRoutedToDeliveryPoint';
    /**
     * Constant for value 'SmsRoutedToExternalMessagingSystem'
     * @return string 'SmsRoutedToExternalMessagingSystem'
     */
    const VALUE_SMS_ROUTED_TO_EXTERNAL_MESSAGING_SYSTEM = 'SmsRoutedToExternalMessagingSystem';
    /**
     * Constant for value 'SmsDelivered'
     * @return string 'SmsDelivered'
     */
    const VALUE_SMS_DELIVERED = 'SmsDelivered';
    /**
     * Constant for value 'OutlookDefaultForContacts'
     * @return string 'OutlookDefaultForContacts'
     */
    const VALUE_OUTLOOK_DEFAULT_FOR_CONTACTS = 'OutlookDefaultForContacts';
    /**
     * Constant for value 'AppointmentItem'
     * @return string 'AppointmentItem'
     */
    const VALUE_APPOINTMENT_ITEM = 'AppointmentItem';
    /**
     * Constant for value 'AppointmentRecur'
     * @return string 'AppointmentRecur'
     */
    const VALUE_APPOINTMENT_RECUR = 'AppointmentRecur';
    /**
     * Constant for value 'AppointmentMeet'
     * @return string 'AppointmentMeet'
     */
    const VALUE_APPOINTMENT_MEET = 'AppointmentMeet';
    /**
     * Constant for value 'AppointmentMeetRecur'
     * @return string 'AppointmentMeetRecur'
     */
    const VALUE_APPOINTMENT_MEET_RECUR = 'AppointmentMeetRecur';
    /**
     * Constant for value 'AppointmentMeetNY'
     * @return string 'AppointmentMeetNY'
     */
    const VALUE_APPOINTMENT_MEET_NY = 'AppointmentMeetNY';
    /**
     * Constant for value 'AppointmentMeetYes'
     * @return string 'AppointmentMeetYes'
     */
    const VALUE_APPOINTMENT_MEET_YES = 'AppointmentMeetYes';
    /**
     * Constant for value 'AppointmentMeetNo'
     * @return string 'AppointmentMeetNo'
     */
    const VALUE_APPOINTMENT_MEET_NO = 'AppointmentMeetNo';
    /**
     * Constant for value 'AppointmentMeetMaybe'
     * @return string 'AppointmentMeetMaybe'
     */
    const VALUE_APPOINTMENT_MEET_MAYBE = 'AppointmentMeetMaybe';
    /**
     * Constant for value 'AppointmentMeetCancel'
     * @return string 'AppointmentMeetCancel'
     */
    const VALUE_APPOINTMENT_MEET_CANCEL = 'AppointmentMeetCancel';
    /**
     * Constant for value 'AppointmentMeetInfo'
     * @return string 'AppointmentMeetInfo'
     */
    const VALUE_APPOINTMENT_MEET_INFO = 'AppointmentMeetInfo';
    /**
     * Constant for value 'TaskItem'
     * @return string 'TaskItem'
     */
    const VALUE_TASK_ITEM = 'TaskItem';
    /**
     * Constant for value 'TaskRecur'
     * @return string 'TaskRecur'
     */
    const VALUE_TASK_RECUR = 'TaskRecur';
    /**
     * Constant for value 'TaskOwned'
     * @return string 'TaskOwned'
     */
    const VALUE_TASK_OWNED = 'TaskOwned';
    /**
     * Constant for value 'TaskDelegated'
     * @return string 'TaskDelegated'
     */
    const VALUE_TASK_DELEGATED = 'TaskDelegated';
    /**
     * Return allowed values
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_POST_ITEM
     * @uses self::VALUE_MAIL_READ
     * @uses self::VALUE_MAIL_UNREAD
     * @uses self::VALUE_MAIL_REPLIED
     * @uses self::VALUE_MAIL_FORWARDED
     * @uses self::VALUE_MAIL_ENCRYPTED
     * @uses self::VALUE_MAIL_SMIME_SIGNED
     * @uses self::VALUE_MAIL_ENCRYPTED_REPLIED
     * @uses self::VALUE_MAIL_SMIME_SIGNED_REPLIED
     * @uses self::VALUE_MAIL_ENCRYPTED_FORWARDED
     * @uses self::VALUE_MAIL_SMIME_SIGNED_FORWARDED
     * @uses self::VALUE_MAIL_ENCRYPTED_READ
     * @uses self::VALUE_MAIL_SMIME_SIGNED_READ
     * @uses self::VALUE_MAIL_IRM
     * @uses self::VALUE_MAIL_IRM_FORWARDED
     * @uses self::VALUE_MAIL_IRM_REPLIED
     * @uses self::VALUE_SMS_SUBMITTED
     * @uses self::VALUE_SMS_ROUTED_TO_DELIVERY_POINT
     * @uses self::VALUE_SMS_ROUTED_TO_EXTERNAL_MESSAGING_SYSTEM
     * @uses self::VALUE_SMS_DELIVERED
     * @uses self::VALUE_OUTLOOK_DEFAULT_FOR_CONTACTS
     * @uses self::VALUE_APPOINTMENT_ITEM
     * @uses self::VALUE_APPOINTMENT_RECUR
     * @uses self::VALUE_APPOINTMENT_MEET
     * @uses self::VALUE_APPOINTMENT_MEET_RECUR
     * @uses self::VALUE_APPOINTMENT_MEET_NY
     * @uses self::VALUE_APPOINTMENT_MEET_YES
     * @uses self::VALUE_APPOINTMENT_MEET_NO
     * @uses self::VALUE_APPOINTMENT_MEET_MAYBE
     * @uses self::VALUE_APPOINTMENT_MEET_CANCEL
     * @uses self::VALUE_APPOINTMENT_MEET_INFO
     * @uses self::VALUE_TASK_ITEM
     * @uses self::VALUE_TASK_RECUR
     * @uses self::VALUE_TASK_OWNED
     * @uses self::VALUE_TASK_DELEGATED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_POST_ITEM,
            self::VALUE_MAIL_READ,
            self::VALUE_MAIL_UNREAD,
            self::VALUE_MAIL_REPLIED,
            self::VALUE_MAIL_FORWARDED,
            self::VALUE_MAIL_ENCRYPTED,
            self::VALUE_MAIL_SMIME_SIGNED,
            self::VALUE_MAIL_ENCRYPTED_REPLIED,
            self::VALUE_MAIL_SMIME_SIGNED_REPLIED,
            self::VALUE_MAIL_ENCRYPTED_FORWARDED,
            self::VALUE_MAIL_SMIME_SIGNED_FORWARDED,
            self::VALUE_MAIL_ENCRYPTED_READ,
            self::VALUE_MAIL_SMIME_SIGNED_READ,
            self::VALUE_MAIL_IRM,
            self::VALUE_MAIL_IRM_FORWARDED,
            self::VALUE_MAIL_IRM_REPLIED,
            self::VALUE_SMS_SUBMITTED,
            self::VALUE_SMS_ROUTED_TO_DELIVERY_POINT,
            self::VALUE_SMS_ROUTED_TO_EXTERNAL_MESSAGING_SYSTEM,
            self::VALUE_SMS_DELIVERED,
            self::VALUE_OUTLOOK_DEFAULT_FOR_CONTACTS,
            self::VALUE_APPOINTMENT_ITEM,
            self::VALUE_APPOINTMENT_RECUR,
            self::VALUE_APPOINTMENT_MEET,
            self::VALUE_APPOINTMENT_MEET_RECUR,
            self::VALUE_APPOINTMENT_MEET_NY,
            self::VALUE_APPOINTMENT_MEET_YES,
            self::VALUE_APPOINTMENT_MEET_NO,
            self::VALUE_APPOINTMENT_MEET_MAYBE,
            self::VALUE_APPOINTMENT_MEET_CANCEL,
            self::VALUE_APPOINTMENT_MEET_INFO,
            self::VALUE_TASK_ITEM,
            self::VALUE_TASK_RECUR,
            self::VALUE_TASK_OWNED,
            self::VALUE_TASK_DELEGATED,
        );
    }
}
