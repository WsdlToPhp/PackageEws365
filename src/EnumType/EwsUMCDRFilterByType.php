<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UMCDRFilterByType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUMCDRFilterByType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FilterByUser'
     * @return string 'FilterByUser'
     */
    const VALUE_FILTER_BY_USER = 'FilterByUser';
    /**
     * Constant for value 'FilterByDate'
     * @return string 'FilterByDate'
     */
    const VALUE_FILTER_BY_DATE = 'FilterByDate';
    /**
     * Return allowed values
     * @uses self::VALUE_FILTER_BY_USER
     * @uses self::VALUE_FILTER_BY_DATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FILTER_BY_USER,
            self::VALUE_FILTER_BY_DATE,
        ];
    }
}
