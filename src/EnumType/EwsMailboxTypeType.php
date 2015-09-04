<?php

namespace Ews\EnumType;

/**
 * This class stands for MailboxTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMailboxTypeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'OneOff'
     * @return string 'OneOff'
     */
    const VALUE_ONEOFF = 'OneOff';
    /**
     * Constant for value 'Mailbox'
     * @return string 'Mailbox'
     */
    const VALUE_MAILBOX = 'Mailbox';
    /**
     * Constant for value 'PublicDL'
     * @return string 'PublicDL'
     */
    const VALUE_PUBLICDL = 'PublicDL';
    /**
     * Constant for value 'PrivateDL'
     * @return string 'PrivateDL'
     */
    const VALUE_PRIVATEDL = 'PrivateDL';
    /**
     * Constant for value 'Contact'
     * @return string 'Contact'
     */
    const VALUE_CONTACT = 'Contact';
    /**
     * Constant for value 'PublicFolder'
     * @return string 'PublicFolder'
     */
    const VALUE_PUBLICFOLDER = 'PublicFolder';
    /**
     * Constant for value 'GroupMailbox'
     * @return string 'GroupMailbox'
     */
    const VALUE_GROUPMAILBOX = 'GroupMailbox';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_ONEOFF
     * @uses self::VALUE_MAILBOX
     * @uses self::VALUE_PUBLICDL
     * @uses self::VALUE_PRIVATEDL
     * @uses self::VALUE_CONTACT
     * @uses self::VALUE_PUBLICFOLDER
     * @uses self::VALUE_GROUPMAILBOX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_ONEOFF,
            self::VALUE_MAILBOX,
            self::VALUE_PUBLICDL,
            self::VALUE_PRIVATEDL,
            self::VALUE_CONTACT,
            self::VALUE_PUBLICFOLDER,
            self::VALUE_GROUPMAILBOX,
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
