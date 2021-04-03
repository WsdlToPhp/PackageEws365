<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MeetingSpaceTypeEnum EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingSpaceTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Public'
     * @return string 'Public'
     */
    const VALUE_PUBLIC = 'Public';
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Return allowed values
     * @uses self::VALUE_PUBLIC
     * @uses self::VALUE_PRIVATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PUBLIC,
            self::VALUE_PRIVATE,
        ];
    }
}
