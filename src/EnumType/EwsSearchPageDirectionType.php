<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchPageDirectionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchPageDirectionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Previous'
     * @return string 'Previous'
     */
    const VALUE_PREVIOUS = 'Previous';
    /**
     * Constant for value 'Next'
     * @return string 'Next'
     */
    const VALUE_NEXT = 'Next';
    /**
     * Return allowed values
     * @uses self::VALUE_PREVIOUS
     * @uses self::VALUE_NEXT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PREVIOUS,
            self::VALUE_NEXT,
        ];
    }
}
