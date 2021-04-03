<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CalendarItemCreateOrDeleteOperationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarItemCreateOrDeleteOperationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SendToNone'
     * @return string 'SendToNone'
     */
    const VALUE_SEND_TO_NONE = 'SendToNone';
    /**
     * Constant for value 'SendOnlyToAll'
     * @return string 'SendOnlyToAll'
     */
    const VALUE_SEND_ONLY_TO_ALL = 'SendOnlyToAll';
    /**
     * Constant for value 'SendToAllAndSaveCopy'
     * @return string 'SendToAllAndSaveCopy'
     */
    const VALUE_SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';
    /**
     * Return allowed values
     * @uses self::VALUE_SEND_TO_NONE
     * @uses self::VALUE_SEND_ONLY_TO_ALL
     * @uses self::VALUE_SEND_TO_ALL_AND_SAVE_COPY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SEND_TO_NONE,
            self::VALUE_SEND_ONLY_TO_ALL,
            self::VALUE_SEND_TO_ALL_AND_SAVE_COPY,
        ];
    }
}
