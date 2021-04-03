<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExecuteSearchSortOrderType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExecuteSearchSortOrderType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'Relevance'
     * @return string 'Relevance'
     */
    const VALUE_RELEVANCE = 'Relevance';
    /**
     * Return allowed values
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_RELEVANCE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DATE_TIME,
            self::VALUE_RELEVANCE,
        ];
    }
}
