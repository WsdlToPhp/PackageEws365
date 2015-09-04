<?php

namespace Ews\EnumType;

/**
 * This class stands for ItemIndexErrorType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsItemIndexErrorType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'GenericError'
     * @return string 'GenericError'
     */
    const VALUE_GENERICERROR = 'GenericError';
    /**
     * Constant for value 'Timeout'
     * @return string 'Timeout'
     */
    const VALUE_TIMEOUT = 'Timeout';
    /**
     * Constant for value 'StaleEvent'
     * @return string 'StaleEvent'
     */
    const VALUE_STALEEVENT = 'StaleEvent';
    /**
     * Constant for value 'MailboxOffline'
     * @return string 'MailboxOffline'
     */
    const VALUE_MAILBOXOFFLINE = 'MailboxOffline';
    /**
     * Constant for value 'AttachmentLimitReached'
     * @return string 'AttachmentLimitReached'
     */
    const VALUE_ATTACHMENTLIMITREACHED = 'AttachmentLimitReached';
    /**
     * Constant for value 'MarsWriterTruncation'
     * @return string 'MarsWriterTruncation'
     */
    const VALUE_MARSWRITERTRUNCATION = 'MarsWriterTruncation';
    /**
     * Constant for value 'DocumentParserFailure'
     * @return string 'DocumentParserFailure'
     */
    const VALUE_DOCUMENTPARSERFAILURE = 'DocumentParserFailure';
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
     * @uses self::VALUE_GENERICERROR
     * @uses self::VALUE_TIMEOUT
     * @uses self::VALUE_STALEEVENT
     * @uses self::VALUE_MAILBOXOFFLINE
     * @uses self::VALUE_ATTACHMENTLIMITREACHED
     * @uses self::VALUE_MARSWRITERTRUNCATION
     * @uses self::VALUE_DOCUMENTPARSERFAILURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_GENERICERROR,
            self::VALUE_TIMEOUT,
            self::VALUE_STALEEVENT,
            self::VALUE_MAILBOXOFFLINE,
            self::VALUE_ATTACHMENTLIMITREACHED,
            self::VALUE_MARSWRITERTRUNCATION,
            self::VALUE_DOCUMENTPARSERFAILURE,
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
