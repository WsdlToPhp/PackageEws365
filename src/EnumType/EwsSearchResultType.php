<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchResultType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchResultType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StatisticsOnly'
     * @return string 'StatisticsOnly'
     */
    const VALUE_STATISTICS_ONLY = 'StatisticsOnly';
    /**
     * Constant for value 'PreviewOnly'
     * @return string 'PreviewOnly'
     */
    const VALUE_PREVIEW_ONLY = 'PreviewOnly';
    /**
     * Return allowed values
     * @uses self::VALUE_STATISTICS_ONLY
     * @uses self::VALUE_PREVIEW_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STATISTICS_ONLY,
            self::VALUE_PREVIEW_ONLY,
        );
    }
}
