<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemIndexErrorType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemIndexErrorType extends AbstractStructEnumBase
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
    const VALUE_GENERIC_ERROR = 'GenericError';
    /**
     * Constant for value 'Timeout'
     * @return string 'Timeout'
     */
    const VALUE_TIMEOUT = 'Timeout';
    /**
     * Constant for value 'StaleEvent'
     * @return string 'StaleEvent'
     */
    const VALUE_STALE_EVENT = 'StaleEvent';
    /**
     * Constant for value 'MailboxOffline'
     * @return string 'MailboxOffline'
     */
    const VALUE_MAILBOX_OFFLINE = 'MailboxOffline';
    /**
     * Constant for value 'AttachmentLimitReached'
     * @return string 'AttachmentLimitReached'
     */
    const VALUE_ATTACHMENT_LIMIT_REACHED = 'AttachmentLimitReached';
    /**
     * Constant for value 'MarsWriterTruncation'
     * @return string 'MarsWriterTruncation'
     */
    const VALUE_MARS_WRITER_TRUNCATION = 'MarsWriterTruncation';
    /**
     * Constant for value 'DocumentParserFailure'
     * @return string 'DocumentParserFailure'
     */
    const VALUE_DOCUMENT_PARSER_FAILURE = 'DocumentParserFailure';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_GENERIC_ERROR
     * @uses self::VALUE_TIMEOUT
     * @uses self::VALUE_STALE_EVENT
     * @uses self::VALUE_MAILBOX_OFFLINE
     * @uses self::VALUE_ATTACHMENT_LIMIT_REACHED
     * @uses self::VALUE_MARS_WRITER_TRUNCATION
     * @uses self::VALUE_DOCUMENT_PARSER_FAILURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_GENERIC_ERROR,
            self::VALUE_TIMEOUT,
            self::VALUE_STALE_EVENT,
            self::VALUE_MAILBOX_OFFLINE,
            self::VALUE_ATTACHMENT_LIMIT_REACHED,
            self::VALUE_MARS_WRITER_TRUNCATION,
            self::VALUE_DOCUMENT_PARSER_FAILURE,
        );
    }
}
