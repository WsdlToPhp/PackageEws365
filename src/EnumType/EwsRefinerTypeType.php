<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefinerTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRefinerTypeType extends AbstractStructEnumBase
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
    const VALUE_HAS_ATTACHMENT = 'HasAttachment';
    /**
     * Constant for value 'MailboxSource'
     * @return string 'MailboxSource'
     */
    const VALUE_MAILBOX_SOURCE = 'MailboxSource';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_TO
     * @uses self::VALUE_FROM
     * @uses self::VALUE_FOLDER
     * @uses self::VALUE_HAS_ATTACHMENT
     * @uses self::VALUE_MAILBOX_SOURCE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_TO,
            self::VALUE_FROM,
            self::VALUE_FOLDER,
            self::VALUE_HAS_ATTACHMENT,
            self::VALUE_MAILBOX_SOURCE,
        ];
    }
}
