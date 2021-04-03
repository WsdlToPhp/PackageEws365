<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SharingDataType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSharingDataType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Calendar'
     * @return string 'Calendar'
     */
    const VALUE_CALENDAR = 'Calendar';
    /**
     * Constant for value 'Contacts'
     * @return string 'Contacts'
     */
    const VALUE_CONTACTS = 'Contacts';
    /**
     * Return allowed values
     * @uses self::VALUE_CALENDAR
     * @uses self::VALUE_CONTACTS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CALENDAR,
            self::VALUE_CONTACTS,
        ];
    }
}
