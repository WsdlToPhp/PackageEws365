<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PeopleSuggestionPersonType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPeopleSuggestionPersonType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Person'
     * @return string 'Person'
     */
    const VALUE_PERSON = 'Person';
    /**
     * Constant for value 'DistributionList'
     * @return string 'DistributionList'
     */
    const VALUE_DISTRIBUTION_LIST = 'DistributionList';
    /**
     * Constant for value 'Room'
     * @return string 'Room'
     */
    const VALUE_ROOM = 'Room';
    /**
     * Constant for value 'Place'
     * @return string 'Place'
     */
    const VALUE_PLACE = 'Place';
    /**
     * Constant for value 'ModernGroup'
     * @return string 'ModernGroup'
     */
    const VALUE_MODERN_GROUP = 'ModernGroup';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_PERSON
     * @uses self::VALUE_DISTRIBUTION_LIST
     * @uses self::VALUE_ROOM
     * @uses self::VALUE_PLACE
     * @uses self::VALUE_MODERN_GROUP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_PERSON,
            self::VALUE_DISTRIBUTION_LIST,
            self::VALUE_ROOM,
            self::VALUE_PLACE,
            self::VALUE_MODERN_GROUP,
        ];
    }
}
