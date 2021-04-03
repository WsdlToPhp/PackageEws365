<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MailboxTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxTypeType extends AbstractStructEnumBase
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
    const VALUE_ONE_OFF = 'OneOff';
    /**
     * Constant for value 'Mailbox'
     * @return string 'Mailbox'
     */
    const VALUE_MAILBOX = 'Mailbox';
    /**
     * Constant for value 'PublicDL'
     * @return string 'PublicDL'
     */
    const VALUE_PUBLIC_DL = 'PublicDL';
    /**
     * Constant for value 'PrivateDL'
     * @return string 'PrivateDL'
     */
    const VALUE_PRIVATE_DL = 'PrivateDL';
    /**
     * Constant for value 'Contact'
     * @return string 'Contact'
     */
    const VALUE_CONTACT = 'Contact';
    /**
     * Constant for value 'PublicFolder'
     * @return string 'PublicFolder'
     */
    const VALUE_PUBLIC_FOLDER = 'PublicFolder';
    /**
     * Constant for value 'GroupMailbox'
     * @return string 'GroupMailbox'
     */
    const VALUE_GROUP_MAILBOX = 'GroupMailbox';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_ONE_OFF
     * @uses self::VALUE_MAILBOX
     * @uses self::VALUE_PUBLIC_DL
     * @uses self::VALUE_PRIVATE_DL
     * @uses self::VALUE_CONTACT
     * @uses self::VALUE_PUBLIC_FOLDER
     * @uses self::VALUE_GROUP_MAILBOX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_ONE_OFF,
            self::VALUE_MAILBOX,
            self::VALUE_PUBLIC_DL,
            self::VALUE_PRIVATE_DL,
            self::VALUE_CONTACT,
            self::VALUE_PUBLIC_FOLDER,
            self::VALUE_GROUP_MAILBOX,
        ];
    }
}
