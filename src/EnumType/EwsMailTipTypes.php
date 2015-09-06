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
    const VALUE_OUTOFOFFICEMESSAGE = 'OutOfOfficeMessage';
    /**
     * Constant for value 'MailboxFullStatus'
     * @return string 'MailboxFullStatus'
     */
    const VALUE_MAILBOXFULLSTATUS = 'MailboxFullStatus';
    /**
     * Constant for value 'CustomMailTip'
     * @return string 'CustomMailTip'
     */
    const VALUE_CUSTOMMAILTIP = 'CustomMailTip';
    /**
     * Constant for value 'ExternalMemberCount'
     * @return string 'ExternalMemberCount'
     */
    const VALUE_EXTERNALMEMBERCOUNT = 'ExternalMemberCount';
    /**
     * Constant for value 'TotalMemberCount'
     * @return string 'TotalMemberCount'
     */
    const VALUE_TOTALMEMBERCOUNT = 'TotalMemberCount';
    /**
     * Constant for value 'MaxMessageSize'
     * @return string 'MaxMessageSize'
     */
    const VALUE_MAXMESSAGESIZE = 'MaxMessageSize';
    /**
     * Constant for value 'DeliveryRestriction'
     * @return string 'DeliveryRestriction'
     */
    const VALUE_DELIVERYRESTRICTION = 'DeliveryRestriction';
    /**
     * Constant for value 'ModerationStatus'
     * @return string 'ModerationStatus'
     */
    const VALUE_MODERATIONSTATUS = 'ModerationStatus';
    /**
     * Constant for value 'InvalidRecipient'
     * @return string 'InvalidRecipient'
     */
    const VALUE_INVALIDRECIPIENT = 'InvalidRecipient';
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
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_OUTOFOFFICEMESSAGE
     * @uses self::VALUE_MAILBOXFULLSTATUS
     * @uses self::VALUE_CUSTOMMAILTIP
     * @uses self::VALUE_EXTERNALMEMBERCOUNT
     * @uses self::VALUE_TOTALMEMBERCOUNT
     * @uses self::VALUE_MAXMESSAGESIZE
     * @uses self::VALUE_DELIVERYRESTRICTION
     * @uses self::VALUE_MODERATIONSTATUS
     * @uses self::VALUE_INVALIDRECIPIENT
     * @uses self::VALUE_SCOPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_OUTOFOFFICEMESSAGE,
            self::VALUE_MAILBOXFULLSTATUS,
            self::VALUE_CUSTOMMAILTIP,
            self::VALUE_EXTERNALMEMBERCOUNT,
            self::VALUE_TOTALMEMBERCOUNT,
            self::VALUE_MAXMESSAGESIZE,
            self::VALUE_DELIVERYRESTRICTION,
            self::VALUE_MODERATIONSTATUS,
            self::VALUE_INVALIDRECIPIENT,
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
