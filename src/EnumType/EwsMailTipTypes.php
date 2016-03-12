<?php

namespace Ews\EnumType;

/**
 * This class stands for MailTipTypes EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailTipTypes
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'OutOfOfficeMessage'
     * @return string 'OutOfOfficeMessage'
     */
    const VALUE_OUT_OF_OFFICE_MESSAGE = 'OutOfOfficeMessage';
    /**
     * Constant for value 'MailboxFullStatus'
     * @return string 'MailboxFullStatus'
     */
    const VALUE_MAILBOX_FULL_STATUS = 'MailboxFullStatus';
    /**
     * Constant for value 'CustomMailTip'
     * @return string 'CustomMailTip'
     */
    const VALUE_CUSTOM_MAIL_TIP = 'CustomMailTip';
    /**
     * Constant for value 'ExternalMemberCount'
     * @return string 'ExternalMemberCount'
     */
    const VALUE_EXTERNAL_MEMBER_COUNT = 'ExternalMemberCount';
    /**
     * Constant for value 'TotalMemberCount'
     * @return string 'TotalMemberCount'
     */
    const VALUE_TOTAL_MEMBER_COUNT = 'TotalMemberCount';
    /**
     * Constant for value 'MaxMessageSize'
     * @return string 'MaxMessageSize'
     */
    const VALUE_MAX_MESSAGE_SIZE = 'MaxMessageSize';
    /**
     * Constant for value 'DeliveryRestriction'
     * @return string 'DeliveryRestriction'
     */
    const VALUE_DELIVERY_RESTRICTION = 'DeliveryRestriction';
    /**
     * Constant for value 'ModerationStatus'
     * @return string 'ModerationStatus'
     */
    const VALUE_MODERATION_STATUS = 'ModerationStatus';
    /**
     * Constant for value 'InvalidRecipient'
     * @return string 'InvalidRecipient'
     */
    const VALUE_INVALID_RECIPIENT = 'InvalidRecipient';
    /**
     * Constant for value 'Scope'
     * @return string 'Scope'
     */
    const VALUE_SCOPE = 'Scope';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_OUT_OF_OFFICE_MESSAGE
     * @uses self::VALUE_MAILBOX_FULL_STATUS
     * @uses self::VALUE_CUSTOM_MAIL_TIP
     * @uses self::VALUE_EXTERNAL_MEMBER_COUNT
     * @uses self::VALUE_TOTAL_MEMBER_COUNT
     * @uses self::VALUE_MAX_MESSAGE_SIZE
     * @uses self::VALUE_DELIVERY_RESTRICTION
     * @uses self::VALUE_MODERATION_STATUS
     * @uses self::VALUE_INVALID_RECIPIENT
     * @uses self::VALUE_SCOPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_OUT_OF_OFFICE_MESSAGE,
            self::VALUE_MAILBOX_FULL_STATUS,
            self::VALUE_CUSTOM_MAIL_TIP,
            self::VALUE_EXTERNAL_MEMBER_COUNT,
            self::VALUE_TOTAL_MEMBER_COUNT,
            self::VALUE_MAX_MESSAGE_SIZE,
            self::VALUE_DELIVERY_RESTRICTION,
            self::VALUE_MODERATION_STATUS,
            self::VALUE_INVALID_RECIPIENT,
            self::VALUE_SCOPE,
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
