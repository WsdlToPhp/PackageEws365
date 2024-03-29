<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemTypesFilterType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemTypesFilterType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MailItems'
     * @return string 'MailItems'
     */
    const VALUE_MAIL_ITEMS = 'MailItems';
    /**
     * Constant for value 'MailConversations'
     * @return string 'MailConversations'
     */
    const VALUE_MAIL_CONVERSATIONS = 'MailConversations';
    /**
     * Constant for value 'CalendarItems'
     * @return string 'CalendarItems'
     */
    const VALUE_CALENDAR_ITEMS = 'CalendarItems';
    /**
     * Constant for value 'People'
     * @return string 'People'
     */
    const VALUE_PEOPLE = 'People';
    /**
     * Constant for value 'OneDriveItems'
     * @return string 'OneDriveItems'
     */
    const VALUE_ONE_DRIVE_ITEMS = 'OneDriveItems';
    /**
     * Constant for value 'FileItems'
     * @return string 'FileItems'
     */
    const VALUE_FILE_ITEMS = 'FileItems';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_MAIL_ITEMS
     * @uses self::VALUE_MAIL_CONVERSATIONS
     * @uses self::VALUE_CALENDAR_ITEMS
     * @uses self::VALUE_PEOPLE
     * @uses self::VALUE_ONE_DRIVE_ITEMS
     * @uses self::VALUE_FILE_ITEMS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_MAIL_ITEMS,
            self::VALUE_MAIL_CONVERSATIONS,
            self::VALUE_CALENDAR_ITEMS,
            self::VALUE_PEOPLE,
            self::VALUE_ONE_DRIVE_ITEMS,
            self::VALUE_FILE_ITEMS,
        ];
    }
}
