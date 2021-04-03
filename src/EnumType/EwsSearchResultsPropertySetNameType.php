<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchResultsPropertySetNameType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchResultsPropertySetNameType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Owa16'
     * @return string 'Owa16'
     */
    const VALUE_OWA_16 = 'Owa16';
    /**
     * Constant for value 'Outlook16'
     * @return string 'Outlook16'
     */
    const VALUE_OUTLOOK_16 = 'Outlook16';
    /**
     * Return allowed values
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_OWA_16
     * @uses self::VALUE_OUTLOOK_16
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_OWA_16,
            self::VALUE_OUTLOOK_16,
        ];
    }
}
