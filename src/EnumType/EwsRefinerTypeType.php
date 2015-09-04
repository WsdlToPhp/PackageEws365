<?php

namespace Ews\EnumType;

/**
 * This class stands for RefinerTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRefinerTypeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'To'
     * @return string 'To'
     */
    const VALUE_TO = 'To';
    /**
     * Constant for value 'From'
     * @return string 'From'
     */
    const VALUE_FROM = 'From';
    /**
     * Constant for value 'Folder'
     * @return string 'Folder'
     */
    const VALUE_FOLDER = 'Folder';
    /**
     * Constant for value 'HasAttachment'
     * @return string 'HasAttachment'
     */
    const VALUE_HASATTACHMENT = 'HasAttachment';
    /**
     * Constant for value 'MailboxSource'
     * @return string 'MailboxSource'
     */
    const VALUE_MAILBOXSOURCE = 'MailboxSource';
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
     * @uses self::VALUE_TO
     * @uses self::VALUE_FROM
     * @uses self::VALUE_FOLDER
     * @uses self::VALUE_HASATTACHMENT
     * @uses self::VALUE_MAILBOXSOURCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_TO,
            self::VALUE_FROM,
            self::VALUE_FOLDER,
            self::VALUE_HASATTACHMENT,
            self::VALUE_MAILBOXSOURCE,
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
