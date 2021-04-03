<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationEventTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNotificationEventTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CopiedEvent'
     * @return string 'CopiedEvent'
     */
    const VALUE_COPIED_EVENT = 'CopiedEvent';
    /**
     * Constant for value 'CreatedEvent'
     * @return string 'CreatedEvent'
     */
    const VALUE_CREATED_EVENT = 'CreatedEvent';
    /**
     * Constant for value 'DeletedEvent'
     * @return string 'DeletedEvent'
     */
    const VALUE_DELETED_EVENT = 'DeletedEvent';
    /**
     * Constant for value 'ModifiedEvent'
     * @return string 'ModifiedEvent'
     */
    const VALUE_MODIFIED_EVENT = 'ModifiedEvent';
    /**
     * Constant for value 'MovedEvent'
     * @return string 'MovedEvent'
     */
    const VALUE_MOVED_EVENT = 'MovedEvent';
    /**
     * Constant for value 'NewMailEvent'
     * @return string 'NewMailEvent'
     */
    const VALUE_NEW_MAIL_EVENT = 'NewMailEvent';
    /**
     * Constant for value 'FreeBusyChangedEvent'
     * @return string 'FreeBusyChangedEvent'
     */
    const VALUE_FREE_BUSY_CHANGED_EVENT = 'FreeBusyChangedEvent';
    /**
     * Return allowed values
     * @uses self::VALUE_COPIED_EVENT
     * @uses self::VALUE_CREATED_EVENT
     * @uses self::VALUE_DELETED_EVENT
     * @uses self::VALUE_MODIFIED_EVENT
     * @uses self::VALUE_MOVED_EVENT
     * @uses self::VALUE_NEW_MAIL_EVENT
     * @uses self::VALUE_FREE_BUSY_CHANGED_EVENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COPIED_EVENT,
            self::VALUE_CREATED_EVENT,
            self::VALUE_DELETED_EVENT,
            self::VALUE_MODIFIED_EVENT,
            self::VALUE_MOVED_EVENT,
            self::VALUE_NEW_MAIL_EVENT,
            self::VALUE_FREE_BUSY_CHANGED_EVENT,
        ];
    }
}
